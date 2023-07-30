<section id="testimonials" class="testimonials">
    <div class="container">

        <div class="section-header">
            <h2>Testimonials</h2>
            <p>What they are saying</p>
        </div>

{{--        <div id="testimonial-list">--}}

{{--        </div>--}}
        <div class="slides-3 swiper">
            <div class="swiper-wrapper" id="testimonial-list">


            </div>
        </div>


    </div>
</section>


<script>

    getData();

 async   function getData() {
        try {

            let URL = "/Testimonial_Data";

            let response = await axios.get(URL);

            response.data.forEach(function (item) {
                document.getElementById('testimonial-list').innerHTML += (`
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            ${item['details']}
                        </p>
                        <div class="profile mt-auto">
                            <img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                            <h3> ${item['title']}</h3>
                            <h4> ${item['subtitle']}</h4>
                        </div>
                    </div>
                </div>
                `)
            });


        }catch (e) {
            alert(e);
        }
    }





</script>
