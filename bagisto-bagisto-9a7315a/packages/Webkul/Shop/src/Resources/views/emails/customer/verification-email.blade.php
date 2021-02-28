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

        <!-- <p>About Us:
        <p>
        <div>
        We are Big Scoop Ice Cream - Pasay City Authorized Retailer! 
        We are happy to serve you one of the best ice cream brands in the 
        country. Big Scoop is served in various restaurants and hotels 
        nationwide! Order now and find happiness with every scoop!
        </div>
        </p>
        </br>
        </p> -->


        
    </div>
    @section('footer')
            {!! view_render_event('bagisto.shop.layout.footer.before') !!}

                @include('shop::layouts.footer.index')

            {!! view_render_event('bagisto.shop.layout.footer.after') !!}
    @show


@endcomponent