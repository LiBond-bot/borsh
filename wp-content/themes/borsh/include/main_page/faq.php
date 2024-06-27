<?php $faq = carbon_get_theme_option('faq'); 

    if($faq){
        ?>
            <section class="section-wrapper-4 content-inner-1 overflow-hidden bg-parallax" style="background-image:url('<?=get_template_directory_uri()?>/assets/images/patterns/back_02.png'); background-attachment: fixed; background-size: 800px;">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title">ЧАВО</h2>
                        <p class="about-p">Частые вопросы клиентов</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="accordion dz-accordion" id="accordionFaq2">
                                <?
                                    foreach ($faq as $key => $item) {

                                        $class;
                                        $class_one;  

                                        if($key == 0) { $class = ''; $class_one = 'show'; } else {$class = 'collapsed'; $class_one = '';};

                                        ?>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne<?=$key?>">
                                                    <a href="#" class="accordion-button <?=$class?>" data-bs-toggle="collapse" data-bs-target="#collapseOne<?=$key?>" aria-expanded="true" aria-controls="collapseOne<?=$key?>">
                                                        <?=$item['question']?>
                                                        <span class="toggle-close"></span>
                                                    </a>
                                                </h2>
                                                <div id="collapseOne<?=$key?>" class="accordion-collapse collapse <?=$class_one?>" aria-labelledby="headingOne<?=$key?>" data-bs-parent="#accordionFaq2">
                                                    <div class="accordion-body">
                                                        <p class="m-b0">
                                                            <?=$item['answer']?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?
    }

?>

