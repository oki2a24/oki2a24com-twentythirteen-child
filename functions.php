<?php
/**
 * more タグで URL 末端に付く #more-xxxx を削除します。
 */
function remove_more_link_scroll( $link ) {
        $link = preg_replace( '|#more-[0-9]+|', '', $link );
        return $link;
}
/**
 * コンテンツの more リンククリック時に処理を追加します。
 */
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
