<!-- Notification Button -->
<button type="button" data-dropdown-toggle="notification-dropdown" class="relative pt-4 p-2 mr-1 ml-3 rounded-lg dark:text-dark-dim dark:hover:text-dark-clear">
    <span class="sr-only">View notifications</span>
    <!-- Bell icon -->
    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
    </svg>
    <div class="absolute inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-dim border-2 border-white rounded-full top-2 end-0 dark:text-dark-deep dark:bg-dark-action dark:border-dark-brown"> 4 </div>
</button>
<!-- Notifications Dropdown Menu -->
<div id="notification-dropdown" class="hidden overflow-hidden z-50 my-4 max-w-sm text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-dark-dim rounded-xl ">
    <div class="block py-2 px-4 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-dark-brown dark:text-dark-dim">
        Notifications
    </div>
    <div class="scrollbar" style="height: 63svh;overflow-y: scroll;">
        <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-dark-clear dark:border-dark-deep">
            <div class="flex-shrink-0">
                <svg class="w-11 h-11 rounded-full p-1 border-2 border-dark-dim dark:bg-dark-clear text-dark-brown" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M3 5.983C3 4.888 3.895 4 5 4h14c1.105 0 2 .888 2 1.983v8.923a1.992 1.992 0 0 1-2 1.983h-6.6l-2.867 2.7c-.955.899-2.533.228-2.533-1.08v-1.62H5c-1.105 0-2-.888-2-1.983V5.983Zm5.706 3.809a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Zm2.585.002a1 1 0 1 1 .003 1.414 1 1 0 0 1-.003-1.414Zm5.415-.002a1 1 0 1 0-1.412 1.417 1 1 0 1 0 1.412-1.417Z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="pl-3 w-full">
                <div class="font-normal text-sm mb-1.5 dark:text-dark-deep">
                    <span class="p-1 font-bold border-2 border-dark-dim dark:bg-dark-clear rounded-md dark:text-dark-deep">Ticket #VNB-91-65486</span> <span class="text-xs italic">Nueva Respuesta</span>
                    <p class="pt-2">
                        <span class="font-semibold">Tomás L.</span> dice:
                        <span class="italic dark:text-dark-brown">"Hola Philip, Gracias por tu paciencia. En este momento el sitio web está en línea..."</span>
                    </p>
                </div>
                <div class="text-xs font-semibold text-primary-600 dark:text-dark-deep">
                    hace un rato atrás
                </div>
            </div>
        </a>
        <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-dark-clear dark:border-dark-deep">
            <div class="flex-shrink-0">
                <svg class="w-11 h-11 rounded-full p-1 border-2 border-dark-dim dark:bg-dark-clear text-dark-brown" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M18.458 3.11A1 1 0 0 1 19 4v16a1 1 0 0 1-1.581.814L12 16.944V7.056l5.419-3.87a1 1 0 0 1 1.039-.076ZM22 12c0 1.48-.804 2.773-2 3.465v-6.93c1.196.692 2 1.984 2 3.465ZM10 8H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6V8Zm0 9H5v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3Z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="pl-3 w-full">
                <div class="font-normal text-sm mb-1.5 dark:text-dark-deep">
                    <span class="p-1 font-bold border-2 border-dark-dim dark:bg-dark-clear rounded-md dark:text-dark-deep">Anuncio Importante</span>
                    <p class="pt-2 font-semibold">Scheduled Maintenance Period Notification</p>
                    July 1, 2025 between 5:00 AM to 7:00 AM EST (Eastern Standard Time)<br>
                    Affected Domain: focusedbee.cl<br>
                    Affected Server: chir207.websitehostserver.net
                </div>
                <div class="text-xs font-semibold text-primary-600 dark:text-dark-deep">
                    ver más
                </div>
            </div>
        </a>
        <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-dark-clear dark:border-dark-deep">
            <div class="flex-shrink-0">                
                <svg class="w-11 h-11 rounded-full p-1 border-2 border-dark-dim dark:bg-dark-clear text-dark-brown" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M6 14h2m3 0h5M3 7v10a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1Z"/>
                </svg>
            </div>
            <div class="pl-3 w-full">
                <div class="font-normal text-sm mb-1.5 dark:text-dark-deep">
                    <span class="p-1 font-bold border-2 border-dark-dim dark:bg-dark-clear rounded-md dark:text-dark-deep">Riesgo de Suspensión</span> <span class="text-xs italic">Acción Requerida</span>                    
                    <p class="pt-2 font-bold">Renovación Atrasada #4167877  </p>
                    <div class="font-semibold">vps.icardi.cl (2025-06-28 - 2025-07-27)</div>                    
                    Dear {{ Auth::user()->name }}, This is a notice your payment failed.                                        
                </div>
                <div class="text-xs font-semibold text-primary-600 dark:text-dark-deep">
                    ver más
                </div>
            </div>
        </a>
        <a href="#" class="flex py-3 px-4 border-b hover:bg-gray-100 dark:hover:bg-dark-clear dark:border-dark-deep">
            <div class="flex-shrink-0">                
                <svg class="w-11 h-11 rounded-full p-1 border-2 border-dark-dim dark:bg-dark-clear text-dark-brown" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M18 17h-.09c.058-.33.088-.665.09-1v-1h1a1 1 0 0 0 0-2h-1.09a5.97 5.97 0 0 0-.26-1H17a2 2 0 0 0 2-2V8a1 1 0 1 0-2 0v2h-.54a6.239 6.239 0 0 0-.46-.46V8a3.963 3.963 0 0 0-.986-2.6l.693-.693A1 1 0 0 0 16 4V3a1 1 0 1 0-2 0v.586l-.661.661a3.753 3.753 0 0 0-2.678 0L10 3.586V3a1 1 0 1 0-2 0v1a1 1 0 0 0 .293.707l.693.693A3.963 3.963 0 0 0 8 8v1.54a6.239 6.239 0 0 0-.46.46H7V8a1 1 0 0 0-2 0v2a2 2 0 0 0 2 2h-.65a5.97 5.97 0 0 0-.26 1H5a1 1 0 0 0 0 2h1v1a6 6 0 0 0 .09 1H6a2 2 0 0 0-2 2v2a1 1 0 1 0 2 0v-2h.812A6.012 6.012 0 0 0 11 21.907V12a1 1 0 0 1 2 0v9.907A6.011 6.011 0 0 0 17.188 19H18v2a1 1 0 0 0 2 0v-2a2 2 0 0 0-2-2Zm-4-8.65a5.922 5.922 0 0 0-.941-.251l-.111-.017a5.52 5.52 0 0 0-1.9 0l-.111.017A5.925 5.925 0 0 0 10 8.35V8a2 2 0 1 1 4 0v.35Z"/>
                </svg>
            </div>
            <div class="pl-3 w-full">
                <div class="font-normal text-sm mb-1.5 dark:text-dark-deep">
                     <span class="p-1 font-bold border-2 border-dark-dim dark:bg-dark-clear rounded-md dark:text-dark-deep">Alerta de Malware </span> <span class="text-xs italic">Acción Requerida</span>                     
                    <p class="pt-2 font-semibold">Usuario: alejandr</p>
                    <span class="font-semibold"> Hosting Webmaster - alejandrofica.cl</span><br>
                    Your prompt attention is required to consider this resolved.            
                </div>
                <div class="text-xs font-semibold text-primary-600 dark:text-dark-deep">
                    ver más
                </div>
            </div>
        </a>      
    </div>
    <a href="#" class="block py-2 text-md font-medium text-center text-gray-900 bg-gray-50 hover:bg-gray-100 dark:bg-dark-brown dark:text-dark-dim dark:hover:underline">
        <div class="inline-flex items-center">
            <svg aria-hidden="true" class="mr-2 w-4 h-4 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
            </svg>
            View all
        </div>
    </a>
</div>