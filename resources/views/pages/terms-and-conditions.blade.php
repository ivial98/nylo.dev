@extends('layouts.app-landing')

@section('content')

<section class="prose lg:prose-lg mx-auto mt-[80px] md:px-0 px-6">
    
    <div>
        <div class="mb-4">
        <span class="bg-[#ECF5FC] px-2 text-primary-blue-deep rounded-3xl py-1 font-semibold">Updated: 16 May, 2023</span>
        </div>

        <h1 class="text-5xl font-medium mb-1">Terms and conditions</h1>
        <p class="text-black mb-[40px]">{{ config('app.name') }} operates the <span class="text-primary-blue">{{ config('app.url') }}</span> website, which provides the SERVICE.</p>

        <div>             
                <p>Welcome to {{ config('app.name') }}.</p>
                <p>These terms and conditions outline the rules and regulations for the use of {{ config('app.name') }}'s Website.</p>

                <p>By accessing this website we assume you accept these terms and conditions in full. Do not continue to use {{ config('app.name') }}'s website
                    if you do not accept all of the terms and conditions stated on this page.
                    The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice
                    and any or all Agreements: “Client”, “You” and “Your” refers to you, the person accessing this website
                    and accepting the Company’s terms and conditions. “The Company”, “Ourselves”, “We”, “Our” and “Us”, refers
                    to our Company. “Party”, “Parties”, or “Us”, refers to both the Client and ourselves, or either the Client
                    or ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake
                    the process of our assistance to the Client in the most appropriate manner, whether by formal meetings
                    of a fixed duration, or any other means, for the express purpose of meeting the Client’s needs in respect
                    of provision of the Company’s stated services/products, in accordance with and subject to, prevailing law
                    of . Any use of the above terminology or other words in the singular, plural,
                    capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to same.Cookies
                    We employ the use of cookies. By using {{ config('app.name') }}'s website you consent to the use of cookies
                    in accordance with {{ config('app.name') }}’s privacy policy.Most of the modern day interactive web sites
                    use cookies to enable us to retrieve user details for each visit. Cookies are used in some areas of our site
                    to enable the functionality of this area and ease of use for those people visiting. Some of our
                    affiliate / advertising partners may also use cookies.License
                    Unless otherwise stated, {{ config('app.name') }} and/or it’s licensors own the intellectual property rights for
                    all material on {{ config('app.name') }}. All intellectual property rights are reserved. You may view and/or print
                    pages from {{ config('app.url') }} for your own personal use subject to restrictions set in these terms and conditions.
                </p>
                <p>
                    You must not:
                </p>
                <p>
                    Republish material from {{ config('app.url') }}
                    <br>
                    Sell, rent or sub-license material from {{ config('app.url') }}
                    <br>
                    Reproduce, duplicate or copy material from {{ config('app.url') }}
                </p>
                <p>
                    Redistribute content from {{ config('app.name') }} (unless content is specifically made for redistribution).
                    Hyperlinking to our Content
                </p>
                <p>
                    The following organizations may link to our Web site without prior written approval:
                </p>
                <p>
                    Government agencies;
                    Search engines;
                    News organizations;
                    Online directory distributors when they list us in the directory may link to our Web site in the same
                    manner as they hyperlink to the Web sites of other listed businesses; and
                    Systemwide Accredited Businesses except soliciting non-profit organizations, charity shopping malls,
                    and charity fundraising groups which may not hyperlink to our Web site.
                </p>
                <p>
                    These organizations may link to our home page, to publications or to other Web site information so long
                    as the link: (a) is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or
                    approval of the linking party and its products or services; and (c) fits within the context of the linking
                    party's site.
                </p>
                <p>
                    No use of {{ config('app.name') }}’s logo or other artwork will be allowed for linking absent a trademark license
                    agreement.
                </p>
                <p>
                    Reservation of Rights
                    We reserve the right at any time and in its sole discretion to request that you remove all links or any particular
                    link to our Web site. You agree to immediately remove all links to our Web site upon such request. We also
                    reserve the right to amend these terms and conditions and its linking policy at any time. By continuing
                    to link to our Web site, you agree to be bound to and abide by these linking terms and conditions.
                    Content Liability
                </p>
                <p>
                    We shall have no responsibility or liability for any content appearing on your Web site. You agree to indemnify
                    and defend us against all claims arising out of or based upon your Website. No link(s) may appear on any
                    page on your Web site or within any context containing content or materials that may be interpreted as
                    libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or
                    other violation of, any third party rights.
                    Disclaimer
                    To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website (including, without limitation, any warranties implied by law in respect of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill). Nothing in this disclaimer will:
                </p>
                <p>
                    limit or exclude our or your liability for death or personal injury resulting from negligence;
                    limit or exclude our or your liability for fraud or fraudulent misrepresentation;
                    limit any of our or your liabilities in any way that is not permitted under applicable law; or
                    exclude any of our or your liabilities that may not be excluded under applicable law.
                </p>
                <p>
                    The limitations and exclusions of liability set out in this Section and elsewhere in this disclaimer: (a)
                    are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer or
                    in relation to the subject matter of this disclaimer, including liabilities arising in contract, in tort
                    (including negligence) and for breach of statutory duty.
                    To the extent that the website and the information and services on the website are provided free of charge,
                    we will not be liable for any loss or damage of any nature.
                </p>
                <p>
                    {{ config('app.name') }} reserves the right, at any time and from time to time, to amend or to modify these Terms of Service without prior notice to you, provided that if any such alterations constitute a material change to these Terms of Service, {{ config('app.name') }} will notify you by posting an announcement on the Website. Amendments and modifications shall take effect immediately when posted on the Website. By continuing to access or use the Services after any such amendments or modifications, you agree to be bound by such amended or modified Terms of Service. For this reason, we encourage you to review the Terms of Service whenever you use the Services. If you do not agree to any change to these Terms of Services, then you must immediately stop using the Services.
                </p>
                <p>
                    Disclaimer
                </p>
                <p>
                    {{ config('app.name') }} is not affiliated with or supported by Google. All logos and trademarks are the property of their respective owners.
                </p>
        </div>
    </div>
</section>

@endsection