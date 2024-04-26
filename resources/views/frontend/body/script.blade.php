 {{-- /// Start Wishlist Add Option // --}}
 <script type="text/javascript">

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })

    function addToWishList(course_id){

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/add-to-wishlist/"+course_id,

            success:function(data){

                  // Start Message

            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 6000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                    })
                }

              // End Message

            }
        })

    }


 </script>
 {{-- /// End Wishlist Add Option // --}}
 {{-- {{ url('course/details/'.$course->id. '/' .$course->course_name_slug) }} --}}
  {{-- /// Start Load Wishlist Data // --}}
 <script type="text/javascript">

    function wishlist(){
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/get-wishlist-course/",

            success:function(response){

                $('#wishQty').text(response.wishQty);

                var rows = ""
                $.each(response.wishlist, function(key, value){

            rows += `
                    <div class="col-lg-4 responsive-column-half">
            <div class="card card-item">
                <div class="card-image">
                    <a href="/course/details/${value.course.id}/${value.course.course_name_slug}" class="d-block">
                        <img class="card-img-top" src="/${value.course.course_image}" alt="Card image cap">
                    </a>

                </div><!-- end card-image -->



                <div class="card-body">
                    <h6 class="mb-3 ribbon ribbon-blue-bg fs-14">${value.course.label}</h6>
                    <h5 class="card-title"><a href="/course/details/${value.course.id}/${value.course.course_name_slug}">${value.course.course_name}</a></h5>

                    <div class="d-flex justify-content-between align-items-center">

                        ${value.course.discount_price == null
                        ?`<p class="text-black card-price font-weight-bold">Ksh. ${value.course.selling_price}</p>`
                        :`<p class="text-black card-price font-weight-bold">Ksh. ${value.course.discount_price} <span class="before-price font-weight-medium">Ksh. ${value.course.selling_price}</span></p>`
                        }

                        <div class="shadow-sm cursor-pointer icon-element icon-element-sm" data-toggle="tooltip" data-placement="top" title="Remove from Wishlist" id="${value.id}" onclick="wishlistRemove(this.id)"><i class="la la-heart"></i></div>
                    </div>
                </div>
            </div>
        </div>
             `
                });
               $('#wishlist').html(rows);

            }
        })
    }
    wishlist();


 </script>
  {{-- /// End Load Wishlist Data // --}}
