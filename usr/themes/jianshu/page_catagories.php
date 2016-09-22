<?php
/**
 * 分类云
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <div class="main-inner">
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="post-header">
                <h2 class="post-title"><?php $this->title() ?></h2>
            </div>
            <div class="post-content" itemprop="articleBody">
                <?php
                    $stat = Typecho_Widget::widget('Widget_Stat');
                    Typecho_Widget::widget('Widget_Metas_Category_List')->to($categorys);

                    $output = '<div class="archives">';

                    if($categorys->have()) {
                        while($categorys->next()) {
                            $output .= '<div class="archives-item"><li><a href="'.$categorys->permalink .'">' . $categorys->name . '(' . $categorys->count . ')' . '</a></li></div>';
                        }
                    }

                    $output .= '</div>';
                    echo $output;
                ?>
            </div>
        </article>
    </div><!-- end #main-->
<?php $this->need('footer.php'); ?>