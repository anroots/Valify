<div class="alert">
    <h4 class="alert-heading"><?=__('Valify check')?></h4>
	<?=__('On :date, the code used to render <strong>:site_name</strong>
     contained <strong>:errors errors</strong> and <strong>:warnings warnings</strong>,
      according to the :link.', array(
	':errors'    => $last_check->errors,
	':warnings'  => $last_check->warnings,
	':site_name' => $site->url,
	':date'      => Date::localized_date($last_check->date, TRUE),
	':link'      => HTML::anchor("http://validator.w3.org/check?uri=$site->url", 'official W3C standards')
))?>
</div>

<div id="chart_div"></div>