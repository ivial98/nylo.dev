<?php

namespace App\Http\Services;

use App\Models\Package;
use Request;
use Cache;

/**
 * Class PackageService
 *
 * @package App\Http\Services\PackageService
 */
class PackageService
{

    /**
     * PackageService constructor
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the resource meta data.
     *
     * @return void
     */
    public function getResourceMetaData()
    {
        return Cache::rememberForever('package-resource-md', function () {
            $packages = Package::all();
            $payload = [];

            foreach ($packages as $package) {
                $payload[$package->repository] = [
                    'repository' => $package->repository,
                    'version' => $package->version,
                    'organization' => $package->organization,
                    'release_note_url' => $this->releaseNoteUrl($package),
                    'repository_url' => $this->repositoryUrl($package)
                ];
            }

            return $payload;
        });
    }

    /**
     * Get the repository url
     *
     * @return String
     */
    public function repositoryUrl(Package $package) : string
    {
        return "https://github.com/{$package->organization}/{$package->repository}";
    }

    /**
     * Get the Pub dev url
     *
     * @return String
     */
    public function pubDevUrl(Package $package) : string
    {
        return "https://pub.dev/packages/{$package->repository}";
    }

    /**
     * Get the release note url
     *
     * @return String
     */
    public function releaseNoteUrl(Package $package) : string
    {
        return "https://github.com/{$package->organization}/{$package->repository}/releases/tag/v{$package->version}";
    }

    /**
     * Update the package version
     *
     * @return mixed
     */
    public function update($repository, $version)
    {
        $package = Package::where('repository', $repository)->update([
            'version' => $version
        ]);
        Cache::forget('package-resource-md'); // clear

        return $package;
    }
}