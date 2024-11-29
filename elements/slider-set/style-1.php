<style>
    .custom-pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 888;
    }

    .custom-pagination .dot {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 42px;
        color: #333;
        cursor: pointer;
        transition: all 0.3s;
        position: relative;
        background-color: #fff;
        filter: drop-shadow(0px 6px 4px #00000010);
    }

    .custom-pagination .dot:last-child {
        margin-right: 0;
    }

    .custom-pagination::before {
        /* .custom-pagination .dot:not(:last-child)::before { */
        /* width: 70px; */
        width: 90%;
        content: '';
        position: absolute;
        left: 20px;
        top: 20px;
        height: 1px;
        display: block;
        border-top: 1px dashed #1e90ff;
        z-index: -1;
    }

    .custom-pagination .dot.active {
        background-color: #1e90ff;
        color: white;
        border-color: #1e90ff;
    }


    .slide .row {
        display: flex;
        position: relative;
    }

    .slide .column {
        position: relative;
        max-width: 50%;
    }

    .slide .right-column {
        position: relative;
    }

    .slide .right-column .big-number {
        color: #D1DEFF;
        font-size: 118px;
        font-weight: 700;
        z-index: -1;
        position: absolute;

    }

    .slide .right-column .slider-content {
        padding-left: 72px;
        padding-bottom: 128px;
    }

    .slide .right-column .slider-content .slide-number {
        font-size: 45px;
        font-weight: 700;
    }
</style>
<div class="ml-slider-container">
    <div class="owl-carousel product-slider-style-1" <?= $this->get_render_attribute_string('slider'); ?>>
        <?php foreach ($settings['reapeter'] as $key => $value) {
            $key++;
        ?>
            <div class="slide">
                <div class="row">
                    <div class="column left-column">
                        <?php if (!empty($value['image']['id'])) { ?>
                            <div class="slide-img">
                                <?= wp_get_attachment_image($value['image']['id'], ['auto', 'auto'], "", []); ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="column right-column">
                        <span class="big-number">0<?= $key; ?></span>
                        <div class="slider-content">
                            <span class="slide-number">0<?= $key; ?></span>
                            <?php if (!empty($value['title_text'])) { ?> <h3 class="title-text"><?= esc_html($value['title_text']); ?></h3> <?php } ?>
                            <?php if (!empty($value['description_text'])) { ?> <p class='text-style'><?= $value['description_text']; ?></p> <?php } ?>
                            <?php if (!empty($value['description_content'])) { ?> <div class='content_style'><?= $value['description_content']; ?></div> <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
        <?php } ?>

    </div>


    <div class="custom-pagination">
        <span class="dot" data-slide="0">1</span>
        <span class="dot" data-slide="1">2</span>
        <span class="dot" data-slide="2">3</span>
        <span class="dot" data-slide="3">4</span>
        <span class="dot" data-slide="4">5</span>
    </div>
</div>