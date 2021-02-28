@component('shop::emails.layouts.master')

    <div>
        <div style="text-align: center;">
            <a href="{{ config('app.url') }}">
                @include ('shop::emails.layouts.logo')
            </a>
        </div>

        <div  style="font-size:16px; color:#242424; font-weight:600; margin-top: 60px; margin-bottom: 15px">
                {!! __('shop::app.mail.customer.verification.heading') !!}
        </div>

        <div>
            {!! __('shop::app.mail.customer.verification.summary') !!}
        </div>

        <div  style="margin-top: 40px; text-align: center">
            <a href="{{ route('customer.verify', $data['token']) }}" style="font-size: 16px;
            color: #FFFFFF; text-align: center; background: #0031F0; padding: 10px 100px;text-decoration: none;">
                {!! __('shop::app.mail.customer.verification.verify') !!}
            </a>
        </div>

        <p>About Us:
        <p>
        <div>
        We are Big Scoop Ice Cream - Pasay City Authorized Retailer! 
        We are happy to serve you one of the best ice cream brands in the 
        country. Big Scoop is served in various restaurants and hotels 
        nationwide! Order now and find happiness with every scoop!
        </div>
        </p>
        </br>
        </p>


        
    </div>
    <div class="footer">
        <div class="footer-content">

            @include('shop::layouts.footer.newsletter-subscription')
            @include('shop::layouts.footer.footer-links')

            {{-- @if ($categories)
                @include('shop::layouts.footer.top-brands')
            @endif --}}

            @if (core()->getConfigData('general.content.footer.footer_toggle'))
                @include('shop::layouts.footer.copy-right')
            @endif
        </div>
    </div>


@endcomponent