        <div id="newsWrapper">
            <?php
                foreach($actus as $news) {
                    if($news['slug'] == $slug)
                        echo(
                            "<article id='".$news['slug']."' class='selectedNews'><h2>".
                                $news['title'].
                                "</h2>".
                                "<p>".
                                    $news['text'].
                                "</p>".
                            "</article>"
                        );
                    else
                        echo(
                            "<article id='".$news['slug']."'><h2>".
                                $news['title'].
                                "</h2>".
                                "<p>".
                                    $news['text'].
                                "</p>".
                            "</article>"
                        );
            }    
            ?>
        </div>