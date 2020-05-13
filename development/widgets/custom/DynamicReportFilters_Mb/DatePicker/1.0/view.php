<div id="rn_<?= $this->instanceID ?>" class="<?= $this->classList ?>" style="padding-top:0px!important;">

  <div id="demo1" class="yui3-skin-sam yui3-g" style="float:left;">
      <!-- You need this skin class -->
      <!-- <label style="letter-spacing:normal; float:left; width:100px;">Install Date</label> -->
      
      <div id="leftcolumn" class="yui3-u" style="float:left;width: 100%;">
        <p style="float:left;margin-right: 5px;font-weight: bold;">Appointment Date</p>
          <!-- <div id="links" class="ui-input-datebox ui-shadow-inset ui-corner-all ui-body-a" style="padding:4px; position:relative;"> -->
            <input type="text" id="selecteddate1" value="" readonly />

            <div style=" float:right; margin-top: -3%;"> 
              <a id="calendar_icon1" class="ui-input-clear  ui-btn-icon-notext ui-btn-corner-all ui-shadow ui-btn-up-a" title="Open Calendar" data-theme="a"  style="float: left;width: 30px;height: 30px;">
                <img src="/euf/assets/images/date.png" alt="load calender" width="100%" height="100%" style="vertical-align:text-bottom" />
                <!-- <span class="ui-btn-inner ui-btn-corner-all">
                <span class="ui-btn-text">Open Calendar</span>
                <span class="ui-icon ui-icon-grid ui-icon-shadow"></span> -->

              </a>
            </div>

              <!--   <span style="display: inline-table; margin-top: 5px;">
              <img style="height:16px"  alt="" src="/euf/assets/images/icons/date-edit.png" ></span>
                  The buttons are created simply by assigning the correct CSS class 
                    <button id="togglePrevMonth" class="yui3-button">Toggle Previous Month's Dates</button><br>
                    <button id="toggleNextMonth" class="yui3-button">Toggle Next Month's Dates</button><br> -->

          <!-- </div> -->
      </div>
      <div id="rightcolumn1" class="yui3-u">
          <!-- Container for the calendar -->
          <div id="mycalendar1"> </div>
      </div>
  </div>
</div>