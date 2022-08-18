<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Send A Message
                    <x-label value="Message" for="message"/>
                    <x-input name="message" id="message"/>
                    <x-button>
                      Send
                    </x-button>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Upload A New Contact
                    <x-label value="Name" for="name"/>
                    <x-input name="name" id="name"/>

                    <x-label value="Phone Number" for="phone_number"/>
                    <x-input name="phone_number" id="phone_number"/>
                    <x-button>
                      Send
                    </x-button>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Upload Contact Excel Sheet
                    <x-label value="File" for="file"/>
                    <x-input type="file" name="file" id="file"/>
                    <x-button>
                      Send
                    </x-button>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
