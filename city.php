       <?php
                                $zipcodes = (isset($fetched_data[0]['serviceable_zipcodes']) &&  $fetched_data[0]['serviceable_zipcodes'] != NULL) ? explode(",", $fetched_data[0]['serviceable_zipcodes']) : "";
                                ?>
                                <div class="form-group row">
                                    <label for="zipcodes" class="col-sm-2 col-form-label">Serviceable Zipcodes <span class='text-danger text-sm'>*</span></label>
                                    <div class="col-sm-10">
                                        <select name="serviceable_zipcodes[]" class="search_zipcode w-100" multiple onload="multiselect()" id="deliverable_zipcodes">
                                            <?php
                                            if (isset($zipcodes) && !empty($zipcodes)) {
                                                $zipcodes_name =  fetch_details('zipcodes', "",  'zipcode,id', "", "", "", "", "id", $zipcodes);
                                                foreach ($zipcodes_name as $row) {
                                            ?>
                                                    <option value=<?= $row['id'] ?> <?= (!empty($zipcodes) && in_array($row['id'], $zipcodes)) ? 'selected' : ''; ?>> <?= $row['zipcode'] ?></option>
                                            <?php }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
