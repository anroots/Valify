<div style="margin-top: 100px"></div>

<h4>
    <?=__('Did you know that the code used to display :site_name currently has <em>:errors</em> errors and <em>:warnings</em> warnings?', array(
    ':errors' => $last_check->errors,
    ':warnings' => $last_check->warnings,
    ':site_name' => $site->url
))?>
</h4>

<div id="chart_div"></div>