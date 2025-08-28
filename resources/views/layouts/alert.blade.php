@if (session()->has('success'))
    <div class="bg-blue-100 mb-2 text-blue-800 px-4 py-3 flex items-center justify-between shadow-sm" role="alert" id="dismiss-alert-success">
        <div class="flex-shrink-0">
            {{ session('success') }}
        </div>
        <button type="button"
            class="inline-flex items-center justify-center rounded-sm focus:outline-none"
            onclick="document.getElementById('dismiss-alert-success').remove()">
            <span class="sr-only">Dismiss</span>
            <svg class="h-3 w-3 text-blue-800" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                <path d="M1 1L15 15M15 1L1 15" stroke="currentColor" stroke-width="2"/>
            </svg>
        </button>
    </div>
@elseif (session()->has('warning'))
    <div class="bg-yellow-100 mb-2 text-yellow-800 px-4 py-3 flex items-center justify-between shadow-sm" role="alert" id="dismiss-alert-warning">
        <div class="flex-shrink-0">
            {{ session('warning') }}
        </div>
        <button type="button"
            class="inline-flex mb-2 items-center justify-center rounded-sm focus:outline-none"
            onclick="document.getElementById('dismiss-alert-warning').remove()">
            <span class="sr-only">Dismiss</span>
            <svg class="h-3 w-3 text-yellow-800" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                <path d="M1 1L15 15M15 1L1 15" stroke="currentColor" stroke-width="2"/>
            </svg>
        </button>
    </div>
@elseif (session()->has('error'))
    <div class="bg-red-100 mb-2 text-red-800 px-4 py-3 flex items-center justify-between shadow-sm" role="alert" id="dismiss-alert-error">
        <div class="flex-shrink-0">
            {{ session('error') }}
        </div>
        <button type="button"
            class="inline-flex items-center justify-center rounded-sm focus:outline-none"
            onclick="document.getElementById('dismiss-alert-error').remove()">
            <span class="sr-only">Dismiss</span>
            <svg class="h-3 w-3 text-red-800" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                <path d="M1 1L15 15M15 1L1 15" stroke="currentColor" stroke-width="2"/>
            </svg>
        </button>
    </div>
@elseif (session()->has('info'))
    <div class="bg-gray-100 mb-2 text-gray-800 px-4 py-3 flex items-center justify-between shadow-sm" role="alert" id="dismiss-alert-info">
        <div class="flex-shrink-0">
            {{ session('info') }}
        </div>
        <button type="button"
            class="inline-flex items-center justify-center rounded-sm focus:outline-none"
            onclick="document.getElementById('dismiss-alert-info').remove()">
            <span class="sr-only">Dismiss</span>
            <svg class="h-3 w-3 text-gray-800" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                <path d="M1 1L15 15M15 1L1 15" stroke="currentColor" stroke-width="2"/>
            </svg>
        </button>
    </div>
@endif
