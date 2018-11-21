jQuery(document).ready(function() {

    //enables only on a normal post page
    if (adminpage == 'post-php') {

        //event handler for clicking the link button
        jQuery('#publish, #original_publish').on('click', function(e) {

            // e.preventDefault()
            jQuery.ajax({
                type: "POST",
                url: 'https://api.netlify.com/build_hooks/[site specific code]', 
                success: function(d) { 
                    console.log(d)
                }
            })


        })
    }
    
})


