        <div id="newsWrapper">
            <?php
                foreach($actus as $news) {
                    if($news['slug'] == $slug)
                        echo(
                            "<div id='selectedNews'><h2>".
                                $news['title'].
                                "</h2>".
                                "<p>".
                                    $news['text'].
                                "</p>".
                            "</div>"
                        );
                    else
                        echo(
                            "<div><h2>".
                                $news['title'].
                                "</h2>".
                                "<p>".
                                    $news['text'].
                                "</p>".
                            "</div>"
                        );
                }
            ?>
        </div>