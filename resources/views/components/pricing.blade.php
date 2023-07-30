<section id="pricing" class="pricing">
    <div class="container">

        <div class="section-header">
            <h2>Prices</h2>
            <p>Check my adorable pricing</p>
        </div>

        <div class="row gy-4 gx-lg-5" id="price-id">

           <!-- End Pricing Item -->

{{--            <div class="col-lg-6">--}}
{{--                <div class="pricing-item d-flex justify-content-between">--}}
{{--                    <h3>Fashion Photography</h3>--}}
{{--                    <h4>$300.00</h4>--}}
{{--                </div>--}}
{{--            </div><!-- End Pricing Item -->--}}

{{--            <div class="col-lg-6">--}}
{{--                <div class="pricing-item d-flex justify-content-between">--}}
{{--                    <h3>Sports Photography</h3>--}}
{{--                    <h4>$200.00</h4>--}}
{{--                </div>--}}
{{--            </div><!-- End Pricing Item -->--}}

{{--            <div class="col-lg-6">--}}
{{--                <div class="pricing-item d-flex justify-content-between">--}}
{{--                    <h3>Still Life Photography</h3>--}}
{{--                    <h4>$120.00</h4>--}}
{{--                </div>--}}
{{--            </div><!-- End Pricing Item -->--}}

{{--            <div class="col-lg-6">--}}
{{--                <div class="pricing-item d-flex justify-content-between">--}}
{{--                    <h3>Wedding Photography</h3>--}}
{{--                    <h4>$500.00</h4>--}}
{{--                </div>--}}
{{--            </div><!-- End Pricing Item -->--}}

{{--            <div class="col-lg-6">--}}
{{--                <div class="pricing-item d-flex justify-content-between">--}}
{{--                    <h3>Photojournalism</h3>--}}
{{--                    <h4>$200.00</h4>--}}
{{--                </div>--}}
{{--            </div><!-- End Pricing Item -->--}}

        </div>
    </div>
</section>



<script>

    getPrice();

 async   function getPrice(){
        try {
            let URL = "/priceData";
            let response = await axios.get(URL);
            response.data.forEach(function (item) {
                document.getElementById('price-id').innerHTML += (`
                 <div class="col-lg-6">
                <div class="pricing-item d-flex justify-content-between">
                    <h3>${item['title']}</h3>
                    <h4>${item['price']}</h4>
                </div>
            </div>
                `);
            });
        }catch (e) {
            alert(e);
        }
    }



</script>














