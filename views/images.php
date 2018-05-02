<?php

// if($_SERVER['SERVER_NAME'] == '127.0.0.1'){
//     if(!defined('DNIMG')) define('DNIMG', 'http://127.0.0.1/yk/images');
// }else{
//     if(!defined('DNIMG')) define('DNIMG', 'http://youthconnektafrica.org/images');
// }

switch($type) {
   case 'slides':
        $images = array(
                     'pic11.jpg',
                     'pic11.jpg',
                     'pic11.jpg',
                    );
        $captions = array(
                    'INCREASED EFFICIENCY <span class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp </span><br>',
                    'INCREASED PRODUCTIVITY <span class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp </span><br>',
                    'FOCUS ON YOUR CORE BUSINESS <span class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp </span><br>',

                    );
                foreach (array_combine($images, $captions) as $image => $caption){ ?>
                    <li>
                        <img class="img img-responsive" style="width: 100%;" src="<?=DN;?>/img/<?=$image?>">
                        <p class="slide-caption hidden-xs wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1s"><?=$caption?></p>
                    </li>
           <?php };
    break;
    case 'logos':
        $logos = array(
                         
                         'slide-01.jpg',
                         'slide-02.jpg',
                         'slide-03.jpg',
                         'slide-04.jpg',
                         'slide-05.jpg',
                         'slide-06.jpg'
                        );
            foreach($logos as $logo){ ?>
                <li><img src="<?=DN;?>/img/<?=$logo; ?>" class="img img-responsive" style="width: 100%; padding: 0; margin: 0;"></li>
           <?php };
    break;
        case 'tests':
        $tests = array(
                         
                     'get-involved-01.jpg',
                     'get-involved-02.jpg',
                     'get-involved-03.jpg',
                     'get-involved-04.jpg',
                    );
            foreach($tests as $test){ ?>
                <li><img src="<?=DN;?>/img/<?=$test; ?>" class="img img-responsive" style="width: 100%; padding: 0; margin: 0;"></li>
           <?php };
    break;

    case 'social':
        $tests = array(
                         
                     // 'Web_Banner-01.jpg',
                     // 'Web_Banner-02.jpg',
                     // 'Web_Banner-03.jpg',
                     // 'Web_Banner-04.jpg',
                         
                     'QOUTES_BANNER-01.jpg',
                     'QOUTES_BANNER-02.jpg',
                     'QOUTES_BANNER-03.jpg',
                     'QOUTES_BANNER-04.jpg',
                     'QOUTES_BANNER-05.jpg',
                    );
            foreach($tests as $test){ ?>
                <li><img src="<?=DN;?>/img/<?=$test; ?>" class="img img-responsive" style="width: 100%; padding: 0; margin: 0;"></li>
           <?php };
    break;

    case 'partners':
        $partners = array(

                    // 'logo-02.png',
                     'myict.jpg',
                     'undp.jpg',
                     'logo-01.png',
                    );
            foreach($partners as $partner){ ?>
                <li><img src="<?=DN;?>/img/<?=$partner ?>" alt="Transform Africa Summit" title="Transform Africa Summit Partners" style="width:100%;"></li>
        <?php };
    break;

    default:
    //
    }
?>
