<?php $this->load->view('carriers/nav'); ?>
<p>
    <h2>
        <?php
        echo $subtitle;

        if ($carrier->id) {
            echo ' ('
                . anchor("carriers/view/$element/$carrier->id", 'View')
                . ')';
        }
        ?>
    </h2>
</p>
<br/>

<?php echo form_open(site_url("carriers/edit/$element/$carrier->id")); ?>

    <input type="hidden" name="is_refresh" value="TRUE">
    <div class="formblock">
        <label>Name</label>
        <input type="text" name="<?php echo $carrier->name; ?>" value="<?php echo $carrier->name; ?>"/>
    </div><br/>
    <div class="formblock">
        <label>Al Concentration (ppm)</label>
        <input type="text" name="<?php echo $carrier->al_conc; ?>" value="<?php echo $carrier->al_conc; ?>"/>
        &plusmn;
        <input type="text" name="<?php echo $carrier->del_al_conc; ?>" value="<?php echo $carrier->del_al_conc; ?>"/>
    </div><br/>
<?php if ($element === 'be'): ?>
    <div class="formblock">
        <label>Be Concentration (ppm)</label>
        <input type="text" name="<?php echo $carrier->be_conc; ?>" value="<?php echo $carrier->be_conc; ?>"/>
        &plusmn;
        <input type="text" name="<?php echo $carrier->del_be_conc; ?>" value="<?php echo $carrier->del_be_conc; ?>"/>
    </div><br/>
    <div class="formblock">
        <label>Be-10/Be-9 Ratio</label>
        <input type="text" name="<?php echo $carrier->r10to9; ?>" value="<?php echo $carrier->r10to9; ?>"/>
        &plusmn;
        <input type="text" name="<?php echo $carrier->r10to9_error; ?>" value="<?php echo $carrier->r10to9_error; ?>"/>
    </div><br/>
<?php elseif ($element === 'al'): ?>
    <div class="formblock">
        <label>Al-26/Al-27 Ratio</label>
        <input type="text" name="<?php echo $carrier->r26to27; ?>" value="<?php echo $carrier->r26to27; ?>"/>
        &plusmn;
        <input type="text" name="<?php echo $carrier->r26to27_error; ?>" value="<?php echo $carrier->r26to27_error; ?>"/>
    </div><br/>
<?php endif ?>
    <div class="formblock">
        <label>In-service Date</label>
        <input type="text" name="<?php echo $carrier->in_service_date; ?>" value="<?php echo $carrier->in_service_date; ?>"/>
    </div><br/>
    <div class="formblock">
        <label>Manufacturer Lot No.</label>
        <input type="text" name="<?php echo $carrier->mfg_lot_no; ?>" value="<?php echo $carrier->mfg_lot_no; ?>"/>
    </div><br/>
    <div class="formblock">
        <label>Owner</label>
        <input type="text" name="<?php echo $carrier->mfg_lot_no; ?>" value="<?php echo $carrier->mfg_lot_no; ?>"/>
    </div><br/>
    <div class="formblock">
        <label>Notes</label>
        <input type="text" name="<?php echo $carrier->mfg_lot_no; ?>" value="<?php echo $carrier->mfg_lot_no; ?>"/>
    </div><br/>
    <div class="formblock">
        <label>In use? (y/n)</label>
        <input type="text" name="<?php echo $carrier->mfg_lot_no; ?>" value="<?php echo $carrier->mfg_lot_no; ?>"/>
    </div><br/>
    <br/>
    <input type="submit" value="Submit" />
    <br/><br/><?php echo validation_errors(); ?><br/>

<?php echo form_close(); ?>