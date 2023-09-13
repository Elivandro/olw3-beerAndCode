<x-app-layout>
    <div class="bg-tertiary-900">
        <div class="fixed top-0 left-0 hidden w-1/2 h-full lg:block bg-tertiary-900" aria-hidden="true"></div>
        <div class="fixed top-0 right-0 hidden w-1/2 h-full lg:block bg-tertiary-800" aria-hidden="true"></div>

        <div class="relative grid grid-cols-1 mx-auto max-w-7xl gap-x-16 lg:grid-cols-2 lg:px-8 lg:pt-16">
            <section aria-labelly="summary-heading" class="py-12 bg-tertiary-800 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">
                <div class="max-w-2xl px-4 mx-auto lg:max-w-none lg:px-0">
                    <dl>
                        <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                    </dl>

                    <x-checkout.product-item>
                        <x-checkout.product-list
                            name="Cubo mágico"
                            price="210"
                            :features="[
                                'cubo',
                                'colorido'
                            ]"
                            image="https://ekit.co.uk/GalleryEntries/eCommerce_solutions_and_services/MedRes_Product-presentation-2.jpg?q=27012012153123"
                        />
                    </x-checkout.product-item>

                    <dl class="pt-6 space-y-6 text-sm font-medium border-t border-white border-opacity-10">
                        <x-checkout.summary-item title="Subtotal" value="420" />
                        <x-checkout.summary-item title="Frete" value="50" />
                        <x-checkout.summary-item title="Total" value="480" :is-last="true" />
                    </dl>

                </div>
            </section>

            <section arria-labelly="payment-and-shipping-heading" class="py-16 lg:mx-auto lg:col-start-1 lg:row-start-1 lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">
                <form class="max-w-2xl px-4 mx-auto lg:max-w-none lg:px-0">
                    <div>
                        <x-section-title title="Informações de contato" />

                        <div class="mt-6">
                            <x-input-label for="email-address" value="Endereço de Email" />

                            <div class="mt-1">
                                <x-text-input
                                    type="email"
                                    id="email-address"
                                    name="email"
                                    autocomplete="email"
                                    placeholder="digite seu email"
                                />
                            </div>
                        </div>
                        
                        <div class="mt-10">
                             <x-section-title title="Detalhes do pagamento" />

                             <div class="grid grid-cols-3 mt-6 gap-x-4 gap-y-6 sm:grid-cols-4">
                                <div class="col-span-3 sm:col-span-4">
                                    
                                    <x-input-label for="card-number" value="Numero do cartão" />

                                    <div class="mt-1">
                                        <x-text-input
                                            type="text"
                                            id="card-number"
                                            name="card-number"
                                            placeholder="Numero do cartão"
                                        />
                                    </div>

                                    <div class="col-span-2 sm:col-span-3">
                                        <x-input-label for="expiration-date" value="Data de expiração" />

                                        <div class="mt-1">
                                            <x-text-input
                                                type="text"
                                                id="expiration-date"
                                                name="expiration-date"
                                                placeholder="MM / YY"
                                            />
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <x-input-label for="cvc" value="CVC" />

                                        <div class="mt-1">
                                            <x-text-input
                                                type="text"
                                                id="cvc"
                                                name="cvc"
                                                placeholder="CVC"
                                            />

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </section>
        </div>

    </div>
</x-app-layout>