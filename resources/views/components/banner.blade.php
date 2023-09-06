<x-splade-toggle :data="true">
    <x-splade-state>
        <div v-if="state.shared.banner && toggled"
            :class="{
                'bg-indigo-500': state.shared.banner.type != 'danger',
                'bg-rose-700': state.shared.banner.type == 'danger'
            }">
            <div class="max-w-screen-xl px-3 py-2 mx-auto sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="flex items-center flex-1 w-0 min-w-0">
                        <span class="flex p-2 rounded-lg"
                            :class="{
                                'bg-indigo-600': state.shared.banner.type != 'danger',
                                'bg-rose-600': state.shared.banner.type == 'danger'
                            }">
                            <svg v-if="state.shared.banner.type != 'danger'" class="w-5 h-5 text-white"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <svg v-if="state.shared.banner.type == 'danger'" class="w-5 h-5 text-white"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                        </span>

                        <p class="ml-3 text-sm font-medium text-white truncate" v-html="state.shared.banner.message" />
                    </div>

                    <div class="shrink-0 sm:ml-3">
                        <button type="button" class="flex p-2 -mr-1 transition rounded-md focus:outline-none sm:-mr-2"
                            :class="{
                                'hover:bg-indigo-600 focus:bg-indigo-600': state.shared.banner.type !=
                                    'danger',
                                'hover:bg-rose-600 focus:bg-rose-600': state.shared.banner.type ==
                                    'danger'
                            }"
                            aria-label="Dismiss" @click="toggle">
                            <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </x-splade-state>
</x-splade-toggle>
