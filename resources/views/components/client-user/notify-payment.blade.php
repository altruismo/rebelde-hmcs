<div class="h-96 rounded-lg shadow-md">
    <h5 class="flex justify-between p-2 px-4 rounded-t-lg text-base font-semibold text-gray-900 md:text-xl dark:text-white bg-clear dark:bg-dark-brown">
        Notify a Payment
    </h5>
    <div class="p-4 pt-1 dark:bg-dark-deep">
        <p class="text-sm mb-4 font-normal text-gray-500 dark:text-gray-400">Let us know you made a payment.</p>

        <form>
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div>
                    <label for="invoice_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"># Invoice Number</label>
                    <input type="text" id="invoice_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12345" pattern="^#?\d{5}$" required />
                </div>
                <div>
                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Website URL (optional)</label>
                    <div id="tooltip-notify-websiteurl" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-dark-brown">
                        we can use this information as reference if the invoice number is not found it
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <input type="url" id="website" data-tooltip-target="tooltip-notify-websiteurl" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="mywebsite.com" />
                </div>
                <div>
                    <label for="operation-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Operation Number</label>
                    <input type="text" id="operation-number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="the operation number" required/>
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number (optional)</label>
                    <div id="tooltip-notify-phonenumber" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-dark-brown">
                        A phone number can be useful to talk if something is wrong
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <input type="tel" id="phone" data-tooltip-target="tooltip-notify-phonenumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="569-4406-4926" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" />
                </div>
                <div>
                    <label for="payment-type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transaction type</label>
                    <select id="payment-type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value=""> select at least one </option>
                        <option value="paypal">PayPal</option>
                        <option value="transfer">Bank Transfer</option>
                        <option value="deposit">Bank Deposit</option>
                    </select>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address (optional)</label>
                    <div id="tooltip-notify-email" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-dark-brown">
                        A email box to contact to you, just in case
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <input type="email" id="email" data-tooltip-target="tooltip-notify-email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" />
                </div>
                <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Is a Bank Transfer/Deposit? send us a receipt:</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF, SVG, PNG, JPG, GIF (MAX. 800x400px).</p>
                </div>
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:text-secondary dark:bg-dark-clear dark:hover:bg-dark-action dark:focus:ring-dark-action">Send Notify</button>
        </form>


    </div>
</div>