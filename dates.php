 <div class="row" style=" margin-top: 10px; margin-bottom: 10px; margin-left: 20px;">
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style=" margin-top: 10px;">
                        <span>Room</span>
                        <select name="roomset" id="rooms2" style="width: 50px;">
                            <option value="1">1</option>
                            <?php
                            for ($a = 2; $a <= 30; $a++) {
                                ?>
                                <option value=".<?php echo $a ?>."><?php echo $a ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style=" margin-top: 10px;">
                        <span>Adult</span>

                            <select name="adutset" style="width: 50px;" id="adults2">
                                <option value="1">1</option>
                                <?php
                                for ($a = 2; $a <= 30; $a++) {
                                    ?>
                                    <option value=".<?php echo $a ?>."><?php echo $a ?></option>
                                <?php }
                                ?>
                            </select>


                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style=" margin-top: 10px;">
                        <span>Children</span>

                            <select name="childsset" id="childs2" style="width: 50px;">
                                <?php
                                for ($a = 0; $a <= 15; $a++) {
                                    ?>
                                    <option value=".<?php echo $a ?>."><?php echo $a ?></option>
                                <?php }
                                ?>
                            </select>
                    </div>


                </div>