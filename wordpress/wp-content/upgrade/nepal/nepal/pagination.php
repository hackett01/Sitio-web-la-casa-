     <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                       <?php
						if($loopb->max_num_pages>1){?>
						    <ul class="pagination pagination-sm">
						    <?php
						      if ($paged > 1) { ?>
						        <li><a href="<?php echo '?paged=' . ($paged -1); //prev link ?>">Prev</a></li>
						                        <?php }
						    for($i=1;$i<=$loopb->max_num_pages;$i++){?>
						        <li><a href="<?php echo '?paged=' . $i; ?>" <?php echo ($paged==$i)? 'class="selected"':'';?>><?php echo $i;?></a></li>
						        <?php
						    }
						    if($paged < $loopb->max_num_pages){?>
						        <li><a href="<?php echo '?paged=' . ($paged + 1); //next link ?>">Next</a></li>
						    <?php } ?>
						    </ul>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>