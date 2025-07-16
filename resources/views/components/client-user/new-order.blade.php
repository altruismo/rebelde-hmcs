<div class="h-auto rounded-lg shadow-md">
  <h5 class="flex justify-between p-2 px-4 rounded-t-lg text-base font-semibold text-gray-900 md:text-xl dark:text-white bg-clear dark:bg-dark-brown">
    New Service Order
  </h5>
  <div class="p-4 pt-1 dark:bg-dark-deep">
    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Place a new order or contact a sales agent at sales@domain.tld</p>
    <form class="mt-4">
      <div class="">
        <label for="domain-name-base" class="block mb-2 text-sm font-medium text-secondary dark:text-white">
          Base domain
        </label>
        <input type="text" id="domain-name-base" class="bg-gray-50 border border-gray-300 placeholder-secondary/50 text-secondary text-sm font-semibold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark-dim dark:border-dark-clear dark:placeholder-dark-brown/50 dark:text-dark-brown dark:focus:ring-dark-action dark:focus:border-dark-action" placeholder="mydomain.tld" required />
      </div>
      <div class="mt-6">
        <select id="select-category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-semibold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark-dim dark:border-dark-clear dark:placeholder-dark-brown dark:text-dark-brown dark:focus:ring-dark-action dark:focus:border-dark-action" required>
        </select>
      </div>
      <div class="mb-5">
        <label class="block text-xs font-base my-1 text-secondary dark:text-heaven">The service you are looking for is not on the list? check out the catalog.</label>
        <select id="select-servicios" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm font-semibold rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark-dim dark:border-dark-clear dark:placeholder-dark-brown dark:text-dark-brown dark:focus:ring-dark-action dark:focus:border-dark-action" required>
        </select>
      </div>
      <button type="submit" class="text-white bg-secondary hover:bg-dim focus:ring-2 focus:outline-none focus:ring-primo font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-dark-clear dark:hover:bg-dark-action dark:text-secondary dark:focus:ring-dark-action">Order</button>
    </form>
  </div>
</div>