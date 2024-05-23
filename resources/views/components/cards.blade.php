@php
    $date = date('d M y'); // Format the date as '22 Apr 24'
    $isToday = date('Y-m-d') === date('Y-m-d', strtotime($date)) ? 'Today' : '';
@endphp

<div class="flex gap-10 py-10 ml font-semibold date-display cursor-pointer" id="datePickerContainer">
    <svg class="w-4 h-4 text-gray-800 mt-1 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        fill="none" viewBox="0 0 8 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
    </svg>
    {{ $date }} {{ $isToday }}
</div>



<div class="flex flex-col md:flex-row md:justify-between">

    <div
        class="flex gap-5 justify-between max-w-sm p-3 bg-white border text-center border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

        <h5 class="text-md font-medium tracking-tight text-gray-900 dark:text-white">Calls Made</h5>
        <div class="space-y-2">
            <p class="font-normal text-gray-700 dark:text-gray-400" id="callsMadeCount">0</p>
            <p class="font-normal text-gray-700 dark:text-gray-400" id="percentage_count">0%</p>
            <p class="font-normal text-gray-700 dark:text-gray-400" id="target">Target = 300</p>
        </div>
    </div>

    <div
        class="flex gap-5 justify-between max-w-sm p-3 bg-white border text-center border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-5 md:mt-0">

        <h5 class="text-md font-medium tracking-tight text-gray-900 dark:text-white">Responses</h5>
        <div class="space-y-2">
            <p class="font-normal text-gray-700 dark:text-gray-400">0</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">0%</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">Target = 25%</p>
        </div>
    </div>

    <div
        class="flex gap-5 justify-between max-w-sm p-3 bg-white border text-center border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-5 md:mt-0">

        <h5 class="text-md font-medium tracking-tight text-gray-900 dark:text-white">Signups</h5>
        <div class="space-y-2">
            <p class="font-normal text-gray-700 dark:text-gray-400">10</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">5%</p>
            <p class="font-normal text-gray-700 dark:text-gray-400">Target = 10%</p>
        </div>
    </div>

    <div
        class="block max-w-sm p-3 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mt-5 md:mt-0">

        <button data-modal-target="static-modal" data-modal-toggle="static-modal" type="button"
            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 w-full md:w-40 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Call
            Count</button><br>
        <button type="button"
            class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 w-full md:w-40 py-2 md:me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Add
            Lead</button>
    </div>


    <!-- Main modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5  rounded-t dark:border-gray-600">

                    <button type="button"
                        class="flex-start text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="static-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>

                </div>
                <!-- Modal body -->
                <form action="{{ route('call_counts.store') }}" method="POST" id="coldCallForm">
                    @csrf
                    <div class="p-2 md:flex md:p-5 gap-10 block   justify-between">
                        <div class="border-2 justify-between rounded-lg p-4 grid grid-cols-1 md:grid-cols-1 mb-3 gap-4">
                            <div>
                                <div class="flex justify-between">
                                    <label for="instagram"
                                        class="w-[50%] font-semibold flex-shrink-0 mr-2">Instagram</label>
                                    <input type="text" name="instagram_call" id="instagram"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between">
                                    <label for="Facebook"
                                        class="w-[50%] font-semibold flex-shrink-0 mr-2">Facebook</label>
                                    <input type="text" name="facebook_call" id="Facebook"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between">
                                    <label for="Twitter"
                                        class="w-[50%] font-semibold flex-shrink-0 mr-2">Twitter</label>
                                    <input type="text" name="twitter_call" id="Twitter"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between">
                                    <label for="Telegram"
                                        class="w-[50%] font-semibold flex-shrink-0 mr-2">Telegram</label>
                                    <input type="text" name="telegram_call" id="Telegram"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between">
                                    <label for="Tiktok"
                                        class="w-[50%] font-semibold flex-shrink-0 mr-2">Tiktok</label>
                                    <input type="text" name="tiktok_call" id="Tiktok"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between">
                                    <label for="Whatsapp"
                                        class="w-[50%] font-semibold flex-shrink-0 mr-2">Whatsapp</label>
                                    <input type="text" name="whatsapp_call" id="Whatsapp"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>
                        </div>

                        <div
                            class="border-2 justify-between  mb-3 rounded-lg p-4 grid grid-cols-1 md:grid-cols-1 gap-4">
                            <div>
                                <div class="flex justify-between">
                                    <label for="instagram"
                                        class="w-[50%] font-semibold flex-shrink-0 mr-2">Office</label>
                                    <input type="text" name="office_call" id="instagram"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between">
                                    <label for="Facebook"
                                        class="w-[50%] font-semibold flex-shrink-0 mr-2">Event</label>
                                    <input type="text" name="event_call" id="Facebook"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between">
                                    <label for="Twitter"
                                        class="w-[50%] font-semibold flex-shrink-0 mr-2">Street</label>
                                    <input type="text" name="street_call" id="Twitter"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between">
                                    <label for="Telegram"
                                        class="w-[50%] font-semibold flex-shrink-0 mr-2">Snapchat</label>
                                    <input type="text" name="snapchat_call" id="Telegram"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between">
                                    <label for="Tiktok" class="w-[50%] font-semibold flex-shrink-0 mr-2">Real Estate
                                        Agent</label>
                                    <input type="number" name="real_estate_agent_call" id="Tiktok"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between">
                                    <label for="Whatsapp"
                                        class="font-semibold w-[50%] flex-shrink-0 mr-2">Others</label>
                                    <input type="number" name="others_call" id="Whatsapp"
                                        class="rounded-lg w-full px-4 input_value">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" justify-center flex rounded-lg p-2  gap-4">
                        <label for="Whatsapp" class="font-semibold ">Total Cold Calls</label>
                        <input type="text" name="total_cold_call" id="totalColdCalls"
                            class="rounded-lg w-[20%]  " readonly>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex justify-center gap-5 items-center p-2 md:p-3 border-gray-200 rounded-b dark:border-gray-600">
                        <button type="button" data-modal-hide="static-modal"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                        <button type="submit" data-modal-hide="static-modal"
                            class="text-white bg-gray-800 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>



{{--  <div id="datePickerContainer" class="hidden">
    <!-- Calendar input field -->
    <input type="text" id="datePicker" class="hidden">
</div>  --}}



