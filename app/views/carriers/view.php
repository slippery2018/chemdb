<?php $this->load->view('carriers/nav'); ?>
<p>
    <h2>
        <?php echo $subtitle; ?>
        (<?php echo anchor("carriers/edit/$element/" . $carrier->id, 'Edit'); ?>)
    </h2>
</p>
<br/>
    <div class="formblock">
        <label>Name</label>
        <?php echo $carrier->name; ?>
    </div>
    <div class="formblock">
        <label>Al Concentration (ppm)</label>
        <?php echo $carrier->al_conc; ?>
        &plusmn;
        <?php echo $carrier->del_al_conc; ?>
    </div>
<?php if ($element === 'be'): ?>
    <div class="formblock">
        <label>Be Concentration (ppm)</label>
        <?php echo $carrier->be_conc; ?>
        &plusmn;
        <?php echo $carrier->del_be_conc; ?>
    </div>
    <div class="formblock">
        <label><sup>10</sup>Be/<sup>9</sup>Be Ratio</label>
        <?php echo $carrier->r10to9; ?>
        &plusmn;
        <?php echo $carrier->r10to9_error; ?>
    </div>
<?php elseif ($element === 'al'): ?>
    <div class="formblock">
        <label><sup>26</sup>Al/<sup>27</sup>Al Ratio</label>
        <?php echo $carrier->r26to27; ?>
        &plusmn;
        <?php echo $carrier->r26to27_error; ?>
    </div>
<?php endif ?>
    <div class="formblock">
        <label>In-service Date</label>
        <?php echo $carrier->in_service_date; ?>
    </div>
    <div class="formblock">
        <label>Manufacturer Lot No.</label>
        <?php echo $carrier->mfg_lot_no; ?>
    </div>
    <div class="formblock">
        <label>Owner</label>
        <?php echo $carrier->owner; ?>
    </div>
    <div class="formblock">
        <label>Notes</label>
        <?php echo $carrier->notes; ?>
    </div>
    <div class="formblock">
        <label>In use?</label>
        <input type="checkbox" disabled <?php echo $in_use ? 'checked' : ''; ?>/>
    </div>
<br/>
