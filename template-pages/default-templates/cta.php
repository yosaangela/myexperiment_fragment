<?php 
$img = get_field('img_cta', 'options');
$title = get_field('title_cta', 'options');
$desc = get_field('desc_cta', 'options');
$on_text = get_field('on_txtbtn', 'options');
$on_refer = get_field('on_btnrefer', 'options');

if($img && $title) : ?>

    <div id="cta" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?php echo $img; ?>')">
        <div class="cta__wrapper container">

            <div class="row">
                <div class="cta__content col-lg-6">
                    <h2><?php echo $title; ?></h2>
                    <p><?php echo $desc; ?></p>
                </div><!-- /.cta__content -->

                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center align-items-center"> 
                    <?php if($on_text && $on_refer) : ?>
                        <a href="<?php echo $on_refer; ?>" class="button-primary"><?php echo $on_text; ?></a>   
                    <?php endif; ?>
                </div>
            </div><!-- /.row -->
            
        </div><!-- /.cta__wrapper -->
    </div><!-- /#cta -->
    
<?php endif ;?>   