<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h3> <b> Contacts </b> </h3>
                  <ul>
                  @foreach ($contacts as $contact)
                      <li> {{ $contact->first_name }} {{$contact->last_name}} </li>
                  @endforeach
                </ul>
                </div>
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <form method="post" action="/send-message">
                    @csrf
                    Send A Message
                    <x-label value="Message" for="message"/>
                    <x-input name="message" id="message"/>
                    <x-button>
                      Send
                    </x-button>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <form method="post" action="/add-contact">
                    @csrf
                    Upload A New Contact
                    <x-label value="First Name" for="first_name"/>
                    <x-input name="first_name" id="first_name"/>
                    <x-label value="Last Name" for="last_name"/>
                    <x-input name="last_name" id="last_name"/>
                    <x-label value="Grade" for="grade"/>
                    <x-input name="grade" id="grade" type="number" min="0" max="12"/>
                    <x-label value="Guardian" for="guardian"/>
                    <x-input name="guardian" id="guardian"/>
                    <x-label value="Phone Number" for="phone_numberber"/>
                    <x-input name="phone_number" id="phone_numberber"/>
                    <x-button>
                      Add Contact
                    </x-button>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <form method="post" action="/upload-contacts" enctype="multipart/form-data">
                    @csrf
                    Upload Contact Excel Sheet
                    <x-label value="File" for="file"/>
                    <x-input type="file" name="file" id="file"/>
                    <x-button>
                      Upload Contacts
                    </x-button>
                  </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
