<div id="menu3" class="container tab-pane cc-tab-pane fade skrill">
    <div class="col-7 pr-0 text-left amount">
        <span class="number mr-4">1</span> <span class="how">How much GWX would you like to purchase?</span>
        <div class="my-4 ml-4 pl-3">
            <label class="mb-0">
                <input type="radio" name="amount" v-model="skrillAmount" value="30"/>
                <div class="box">
                    <span>$30</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="skrillAmount" value="50"/>
                <div class="box">
                    <span>$50</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="skrillAmount" value="100"/>
                <div class="box">
                    <span>$100</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="skrillAmount" value="200"/>
                <div class="box">
                    <span>$200</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="skrillAmount" value="500"/>
                <div class="box">
                    <span>$500</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="skrillAmount" value="Other"/>
                <div class="box">
                    <span>Other</span>
                </div>
            </label>
        </div>
        <div v-if="skrillAmount == 'Other'" class="otherAmount ml-4 pl-3">
            <label>$</label>
            <input type="number" class="mb-3" v-model="skrillOtherAmount"><br>
            <small class="gray-text">You will be debited $</small><small class="gray-text" v-text="skrillOtherAmount"></small><br>
            <div v-if="skrillOtherAmount">
                <span>$</span><span v-text="skrillOtherAmount"></span><span> = </span><span>1462.2353 GWX</span><br>
                <small class="gray-text rate">Rate valid for 60 more seconds...</small>
            </div>
        </div>
        <div v-else class="ml-4 pl-3">
            <small class="gray-text">You will be debited $</small><small class="gray-text" v-text="skrillAmount"></small><br>
            <div v-if="skrillAmount">
                <span>$</span><span v-text="skrillAmount"></span><span> = </span><span>1462.2353 GWX</span><br>
                <small class="gray-text rate">Rate valid for 60 more seconds...</small>
            </div>
        </div>
    </div>
    <div class="col px-0">
        <span class="number mr-4">2</span> <span class="how">Enter Payment Information</span>
        <div class="mt-3 ml-4 pl-4">
            <small class="gray-text">Login to Skrill enter payment information</small><br>
            <button class="yellow-button px-4 mt-3">CONTINUE TO SKRILL</button>
        </div>
    </div>
</div>
