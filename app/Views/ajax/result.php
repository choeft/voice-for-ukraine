<h5>Link to contact form:</h5>
<?php if(strpos($link, "http") === 0) : ?>
    <p>To open the contact form and contact your representative, click here:
        <a href="<?= esc($link) ?>" target="_blank">contact form</a>.
    </p>
<?php elseif(strpos($link, "@") > 1) : ?>
    <p>Please write to your representative via e-mail: <a href="mailto:<?= esc($link) ?>"><?= esc($link) ?></a></p>
<?php else : ?>
    <p><?= esc($link) ?></p>
<?php endif; ?>
<hr>
<h5>Subject line</h5>
<p id="subjectline_clipboard"><?= esc($headline) ?></p>
<div class="mt-3">
    <button type="button"
            class="btn btn-primary btn-clipboard"
            data-clipboard-action="copy"
            data-clipboard-target="#subjectline_clipboard">Copy</button>
</div>
<hr>
<h5>Template text</h5>
<p id="maintext_clipboard"><?= $body ?></p>
<div class="mt-3">
    <button type="button"
            class="btn btn-primary btn-clipboard"
            data-clipboard-action="copy"
            data-clipboard-target="#maintext_clipboard">Copy</button>
</div>
