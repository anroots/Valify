<div class="alert">
    <p>
		<?=__('On :date, the HTML code used to render <strong>:site_name</strong>
     contained <strong>:errors errors</strong> and <strong>:warnings warnings</strong>,
      according to the :link.', array(
		':errors'    => $last_check->errors,
		':warnings'  => $last_check->warnings,
		':site_name' => $site->url,
		':date'      => Date::localized_date($last_check->date, TRUE),
		':link'      => HTML::anchor("http://validator.w3.org/check?uri=$site->url", 'official W3C standards')
	))?>
    </p>
</div>

<div id="chart_div"></div>