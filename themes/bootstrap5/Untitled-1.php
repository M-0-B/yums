//Topic Content Type
<?php
  if ($type[0]['target_id'] == 'topic') {
    $field_group = $node->hasField('field_group');
          $group_content = false;
          if($field_group){
             $field_group = $node->get('groups')->getValue();
             if(!empty($field_group) && isset($field_group[0]['target_id'])){
                $group_content = true;
                $gid = $field_group[0]['target_id'];
                $glabel = getGroupLabel($gid);
                $variables[$glabel] = \Drupal::service('path.alias_manager')->getAliasByPath('/group/'. $gid .'/stream');
                $variables['back_topics'] = \Drupal::service('path.alias_manager')->getAliasByPath('/group/'. $gid .'/topics');
             }
          }
          $var_dump $field_group;
    $nid = $node->get('nid')->getValue();
    $category = $node->get('field_topic_type')->getValue();
    $field_except = $node->get('field_except')->getValue();
    $variables['field_except'] = !empty($field_except) ? $field_except[0]['value'] : "";
    if(!empty($field_except)){
     $str =  (strlen($field_except[0]['value']) > 80) ? substr($field_except[0]['value'],0,80).'...' : $field_except[0]['value'];
    $variables['field_except_text'] = $str;
    }

    if (isset($category[0]['target_id']) && $category[0]['target_id'] == 1) {
      $variables['post_icon'] = 'fa fa-newspaper-o';
    }
    //$variables['post_icon'] = 'fa-newspaper-o';
    $variables['content_data'] = 'topic';
    $variables['type_class'] = 'topic_cl topic noble-gas';

    $topic_image = $node->get('field_topic_image')->getValue();
    $variables['topic_image'] = NULL;
    if (isset($topic_image[0]['target_id']) && !empty($topic_image[0]['target_id'])) {
      $file = \Drupal\file\Entity\File::load($topic_image[0]['target_id']);
      if (!empty($file)) {
        $variables['topic_image'] = \Drupal\image\Entity\ImageStyle::load('sidebar_image_size')
          ->buildUrl($file->getFileUri());
      }
    }

    if (($variables['elements']['#view_mode'] == 'activity' || $variables['elements']['#view_mode'] == 'teaser') && empty($topic_image)) {
        $owner = $node->getOwner();
        $user_profile = \Drupal::entityTypeManager()->getStorage('profile')->loadByUser($owner, ProfileType::load('profile')->id(), TRUE)->toArray();
        if (isset($user_profile['field_profile_image'][0]['target_id'])) {
            $file = \Drupal\file\Entity\File::load($user_profile['field_profile_image'][0]['target_id']);
            $path = $file->getFileUri();
            $img_style = '270x280';
            $path = \Drupal\image\Entity\ImageStyle::load($img_style)->buildUrl($path);
            $variables['topic_teaser_default_picture'] = $path;
        }else{
            $default_image = social_profile_get_default_image();
            if (!empty($default_image['id'])) {
                $file = \Drupal\file\Entity\File::load($default_image['id']);
                $path = $file->getFileUri();
                $img_style = '270x280';
                $path = \Drupal\image\Entity\ImageStyle::load($img_style)->buildUrl($path);
                $variables['topic_teaser_default_picture'] = $path;
            }
        }
    }

    $field_topic_type = $node->get('field_topic_type')->getValue();
    $topic_type = $field_topic_type[0]['target_id'];
    $variables['nid'] = $nid[0]['value'];
    if ($topic_type == 2) {
      $variables['topic_types'] == TRUE;
    }

    $uid = $node->get('uid')->getValue();
    $author = \Drupal::entityTypeManager()
      ->getStorage('user')
      ->load($uid[0]['target_id']);
    $role = $author->getRoles();

    $artist_class = [];
    if (in_array('sitemanager', $role) || in_array('contentmanager', $role) || in_array('administrator', $role)) {
      $artist_class[] = 'talawa_make';
    }

    if (in_array('artist', $role)) {
      $artist_class[] = 'from_artist';
    }

    if (in_array('industry', $role)) {
      $artist_class[] = 'from_industry';
    }
    $artist_class_1 = implode(' ', $artist_class);

    $variables['artist_class'] = $artist_class_1;

    $field_topic_category = $node->get('field_topic_category')->getValue();
    if (!empty($field_topic_category) && isset($field_topic_category[0]['target_id'])) {
      $topic_category = $field_topic_category[0]['target_id'];
      if ($topic_category) {
        $term = \Drupal\taxonomy\Entity\Term::load($topic_category);
        if ($term) {
          $topic_category_name = $term->getName();
          $tc_name .= '/ ' . $topic_category_name;
        }
        $variables['tc_name'] = $tc_name;

      }
    }





    