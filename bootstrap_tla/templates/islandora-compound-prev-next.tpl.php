<?php
/**
 * @file
 * islandora-compound-object-prev-next.tpl.php
 *
 * @TODO: needs documentation about file and variables
 * $parent_label - Title of compound object
 * $child_count - Count of objects in compound object
 * $parent_url - URL to manage compound object
 * $previous_pid - PID of previous object in sequence or blank if on first
 * $next_pid - PID of next object in sequence or blank if on last
 * $siblings - array of PIDs of sibling objects in compound
 * $themed_siblings - array of siblings of model
 *    array(
 *      'pid' => PID of sibling,
 *      'label' => label of sibling,
 *      'TN' => URL of thumbnail or default folder if no datastream,
 *      'class' => array of classes for this sibling,
 *    )
 */

?>
<div class="islandora-compound-prev-next">
 <span class="islandora-compound-title"><?php
     print t('Part of: @parent (@count @objects)', array('@parent' => $parent_label, '@count' => $child_count, '@objects' => format_plural($child_count, 'object', 'objects'))); ?>
     <?php if ($parent_url): ?>
         <?php print l(t('manage parent'), $parent_url); ?>
     <?php endif; ?>
     <?php if ($parent_tn): ?>
         <?php print l(
             theme_image(
                 array(
                     'path' => $parent_tn,
                     'attributes' => array(),
                 )
             ),
             'islandora/object/' . $parent_pid,
             array('html' => TRUE)
         ); ?>
     <?php endif; ?>
 </span><br/>

    <?php if (!empty($previous_pid)): ?>
        <?php print l(t('Previous'), 'islandora/object/' . $previous_pid); ?>
    <?php endif; ?>
    <?php if (!empty($previous_pid) && !empty($next_pid)): ?>

    <?php endif;?>
    <?php if (!empty($next_pid)): ?>
        <?php print l(t('Next'), 'islandora/object/' . $next_pid); ?>
    <?php endif; ?>

    <?php if (count($themed_siblings) > 0): ?>
        <div class="islandora-compound-thumbs">
            <?php foreach ($themed_siblings as $sibling): ?>
                <div class="islandora-compound-thumb">
                    <div class='islandora-compound-caption'><?php print $sibling['label'];?></div>

                    <?php print l(
                        theme_image(
                            array(
                                'path' => $sibling['TN'],
                                'attributes' => array('class' => $sibling['class']),
                            )
                        ),
                        'islandora/object/' . $sibling['pid'],
                        array('html' => TRUE)
                    );
                    ?>

                    <?php print l(t('View'), 'islandora/object/' . $sibling['pid'], array('attributes' => array('class' => array('islandora-compound-caption', 'islandora-compound-caption-link')))); ?>

                    <?php print l(t('Download'), 'islandora/object/' . $sibling['pid'] . '/datastream/OBJ/download', array('attributes' => array('class' => array('islandora-compound-caption', 'islandora-compound-caption-link')))); ?>

                </div>

            <?php endforeach; // each themed_siblings ?>
        </div> <!-- // islandora-compound-thumbs -->
    <?php endif; // count($themed_siblings) > 0 ?>
</div>