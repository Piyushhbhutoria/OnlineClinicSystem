<?php
function youAreHere($page)
{
	return <<<HTML
	<section id="blogArchive">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog-breadcrumbs-area">
                    <div class="container">
                        <div class="blog-breadcrumbs-left">
                            <h2>{$page}</h2>
                        </div>
                        <div class="blog-breadcrumbs-right">
                            <ol class="breadcrumb">
                                <li>You are here</li>
                                <li><a href="#">Home</a></li>
                                <li class="active">{$page}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>';
HTML;
}

function alert($message)
{
	echo '<script>
      alert("' . $message . '");
    </script>';
}

function alert_and_redirect($message, $url)
{
	echo '<script>
			alert("' . $message . '");
			window.location.href = "' . $url . '";
		</script>';
}
