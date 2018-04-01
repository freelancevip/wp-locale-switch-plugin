<?php defined( 'ABSPATH' ) || exit(); ?>

<div id="wrap">
    <h2>WP Locale Switch Plugin Settings</h2>
    <form method="POST" action="options.php">
		<?php settings_fields( $this->settings->group() ); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="wlsp-locales">Locales</label></th>
                <td>
                    <input
                            type="text"
                            name="<?php echo $this->settings->field(); ?>"
                            value="<?php echo $this->settings->get_locales(); ?>"
                            id="wlsp-locales">
                    <p>
                        <small>Comma separated language locales, e.g. en, fr</small>
                    </p>
                </td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e( 'Save' ) ?>">
        </p>
    </form>
</div>
