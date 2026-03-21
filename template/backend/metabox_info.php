
<div id="api_table">
    <table class="options-table-responsive dt-options-table">
        <tbody>
        <tr>
            <td class="label"><label>Trạng thái</label></td>
            <td class="field">
                <?php
                $ophim_movie_status = op_get_meta('movie_status');
                ?>
                <?php
                $f = array( 'trailer' => __('Sắp chiếu', 'topxx'), 'ongoing' => __('Đang chiếu', 'topxx'), 'completed' => __('Hoàn thành', 'topxx'));
                foreach ($f as $x => $n ) { ?>
                    <label for="<?php echo $ophim_movie_status ?>_<?php echo $x ?>">
                        <input id="<?php echo $ophim_movie_status; ?>_<?php echo $x ?>" class="<?php echo $x ?>" name="ophim[ophim_movie_status]" type="radio" value="<?php echo $x ?>" <?php if (isset($ophim_movie_status)) { checked( $x, $ophim_movie_status, true ); } ?> /> <?php echo $n ?>
                    </label>
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td class="label"><label>Tiêu đề gốc</label></td>
            <td class="field">

                <input name="ophim[ophim_original_title]" type="text" value="<?= op_get_meta('original_title') ?>">
            </td>
        </tr>
        <tr>
            <td class="label">
                <label>Thời lượng</label>
            </td>
            <td class="field">
                <input name="ophim[ophim_runtime]" type="text" value="<?= op_get_meta('runtime') ?>">
            </td>
        </tr>
        <tr>
            <td class="label">
                <label>Tổng tập </label>
            </td>
            <td class="field">
                <input name="ophim[ophim_total_episode]" type="text" value="<?= op_get_meta('total_episode') ?>">
            </td>
        </tr>
        <tr>
            <td class="label">
                <label>Chất lượng</label>
            </td>
            <td class="field">
                <input name="ophim[ophim_quality]" type="text" value="<?= op_get_meta('quality') ?>">
            </td>
        </tr>
        <tr>
            <td class="label">
                <label>Đường dẫn gốc </label>
            </td>
            <td class="field">
                <input name="ophim[ophim_fetch_info_url]" type="text" value="<?= op_get_meta('fetch_info_url') ?>">
            </td>
        </tr>
        <tr>
            <td class="label">
                <label>Ảnh thumb</label>
            </td>
            <td class="field">
                <input name="ophim[ophim_thumb_url]" id="thumb" type="text" value="<?= op_get_meta('thumb_url') ?>">
                <img id="thumb_url" src="<?= op_get_meta('thumb_url') ?>" alt="" style="max-height: 100px">
            </td>
        </tr>
        <tr>
            <td class="label">
            </td>
            <td class="field">
                <a href="#" class="ophim_upload_image_thumb_url button">Upload image</a>
            </td>
        </tr>
        <tr>
            <td class="label">
                <label>Ảnh poster</label>
            </td>
            <td class="field">
                <input name="ophim[ophim_poster_url]" id="poster" type="text" value="<?= op_get_meta('poster_url') ?>">
                <img id="imgPoster" src="<?= op_get_meta('poster_url') ?>" alt="" style="max-height: 100px">
            </td>
        </tr>
        <tr>
            <td class="label">
            </td>
            <td class="field">
                <a href="#" class="ophim_upload_image_button button">Upload image</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
