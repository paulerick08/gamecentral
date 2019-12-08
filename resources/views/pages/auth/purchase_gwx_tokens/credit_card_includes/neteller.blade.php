<div id="menu2" class="container tab-pane cc-tab-pane fade neteller">
    <div class="col px-0 text-left amount">
        <span class="number mr-4">1</span> <span class="how">How much GWX would you like to purchase?</span>
        <div class="my-4">
            <label class="mb-0">
                <input type="radio" name="amount" v-model="netellerAmount" value="30"/>
                <div class="box">
                    <span>$30</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="netellerAmount" value="50"/>
                <div class="box">
                    <span>$50</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="netellerAmount" value="100"/>
                <div class="box">
                    <span>$100</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="netellerAmount" value="200"/>
                <div class="box">
                    <span>$200</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="netellerAmount" value="500"/>
                <div class="box">
                    <span>$500</span>
                </div>
            </label>
            <label class="mb-0">
                <input type="radio" name="amount" v-model="netellerAmount" value="Other"/>
                <div class="box">
                    <span>Other</span>
                </div>
            </label>
        </div>
        <div v-if="netellerAmount == 'Other'" class="otherAmount">
            <label>$</label>
            <input type="number" class="mb-3" v-model="netellerOtherAmount"><br>
            <small class="gray-text">You will be debited $</small><small class="gray-text" v-text="netellerOtherAmount"></small><br>
            <div v-if="netellerOtherAmount">
                <span>$</span><span v-text="netellerOtherAmount"></span><span> = </span><span>1462.2353 GWX</span><br>
                <small class="gray-text rate">Rate valid for 60 more seconds...</small>
            </div>
        </div>
        <div v-else>
            <small class="gray-text">You will be debited $</small><small class="gray-text" v-text="netellerAmount"></small><br>
            <div v-if="netellerAmount">
                <span>$</span><span v-text="netellerAmount"></span><span> = </span><span>1462.2353 GWX</span><br>
                <small class="gray-text rate">Rate valid for 60 more seconds...</small>
            </div>
        </div>
    </div>
    <div class="col px-0">
        <div class="text-right signup">
            <a href="#" class="yellow-text"><small>Sign up to Neteller</small></a>
        </div>
        <span class="number mr-4">2</span> <span class="how">Enter Payment Information</span>
        <div class="mt-3">
            <div class="d-flex">
                <div class="col px-0 mr-3">
                    <div>
                        <small class="gray-text">Email Address</small>
                        <a href="#" class="float-right gray-text"><small>Use my account ID</small></a>
                    </div>
                    <input type="email" placeholder="Email Address" class="email mt-2">
                </div>
                <div class="col px-0">
                    <small class="gray-text">Secure ID / Authentication Code</small><br>
                    <input type="number" placeholder="6 Digit Number" class="code mt-2">
                </div>
            </div>
            <div class="mt-5">
                <button class="float-right yellow-button px-4">DEPOSIT</button>
            </div>
        </div>
    </div>
</div>
