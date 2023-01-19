</div>
                    </article>
                    <aside class="aside">
                        <div class="lnb">
<?php
     include G5_THEME_PATH.'/doc/nav.php';  
?>
                        </div>

                    </aside>
                </div>
            </section>
        </div>


        <?
        if($board['bo_table'] == 'qa') {
            $num = 6;
        } else if($board['bo_table'] == 'gallery') {
            $num = 5;
        }
        ?>


        <script>
        $(function(){
            var num = <?= $num ?>;
            $('.lnb ul>li').eq(num-1).addClass('on');
        })
        </script>