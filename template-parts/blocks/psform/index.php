<?php
$form_header = get_field('form_container')['header'];
?>
<main>
<form action="submit" class="contact-form">
        <h2><?php echo esc_html($form_header); ?></h2>
            <div class="form-container">
                <div class="form-row">
                    <input class="form-input" type="text" placeholder="<?php _e('Vārds, Uzvārds*', 'sparkle') ?>" required>
                    <input class="form-input" type="email" placeholder="<?php _e('E-pasts*', 'sparkle') ?>" required>
                </div>
                <input class="form-input" type="tel" placeholder="<?php _e('Telefons*', 'sparkle') ?>">
                <div class="input-container">
                    <textarea class="form-input textarea" id="textarea" type="textarea"
                        placeholder="<?php _e('Jautājums, vai komentārs*', 'sparkle') ?>" required></textarea>
                        <label for="textarea"><?php _e('* obligāti aizpildāmie lauki', 'sparkle') ?></label>
                </div>
                <div class="checkbox-container">
                    <input id="checkbox" type="checkbox" required>
                    <label for="checkbox"><?php _e('Piekrītu, ka mani dati tiks izmantoti likumdošanā
                            noteiktā kārtībā un tiks saglabāti līdz brīdim, kamēr tas būs nepieciešams.', 'sparkle') ?></label>
                </div>
                <button><?php _e('Sūtīt', 'sparkle') ?></button>
            </div>
        </form>
</main>