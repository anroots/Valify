<h3><?=__('Sites')?></h3>
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>URL</th>
    </tr>
    </thead>
    <tbody>
    <?foreach ($sites as $site): ?>
    <tr>
        <td><?=$site->id?></td>
        <td><?=$site->url?></td>
    </tr>
        <? endforeach?>
    </tbody>
</table>

<h3><?=__('Checks')?></h3>

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th><?=__('URL')?></th>
        <th><?=__('Date')?></th>
        <th><?=__('Errors')?></th>
        <th><?=__('Warnings')?></th>
    </tr>
    </thead>
    <tbody>
    <?foreach ($checks as $check): ?>
    <tr>
        <td><?=$check->id?></td>
        <td><?=$check->site->url?></td>
        <td><?=$check->date?></td>
        <td><?=$check->errors?></td>
        <td><?=$check->warnings?></td>
    </tr>
        <? endforeach?>
    </tbody>
</table>