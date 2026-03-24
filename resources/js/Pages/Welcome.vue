<script setup>
import { Head } from '@inertiajs/vue3'

const whatsappLink =
    "https://wa.me/5519998845678?text=Olá,%20gostaria%20de%20agendar%20uma%20consulta"
</script>

<template>
  <Head title="Psicóloga Humanista" />

  <div class="bg-sky-50 text-slate-800">
    <!-- HERO -->
    <section class="bg-gradient-to-br from-sky-100 via-sky-50 to-rose-100 py-20">
      <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-[2fr_1fr] gap-12 items-center">
        <div>
          <p class="inline-flex items-center rounded-full bg-white/80 px-4 py-2 text-sm font-medium text-sky-700 shadow-sm">
            Psicologia com acolhimento, escuta e presença
          </p>

          <h1 class="mt-6 text-4xl md:text-5xl font-bold leading-tight text-slate-900">
            Um espaço livre e seguro para seu autocuidado e desenvolvimento, respeitando sua singularidade.
          </h1>

          <p class="mt-6 text-lg md:text-xl text-slate-700 max-w-2xl">
            Atendimento psicológico humanista para pessoas que buscam autoconhecimento,
            equilíbrio emocional e uma vida mais autêntica.
          </p>

          <div class="mt-8 flex flex-col sm:flex-row gap-4">
            <a
              :href="whatsappLink"
              target="_blank"
              class="inline-flex justify-center bg-sky-500 hover:bg-sky-600 text-white px-8 py-4 rounded-xl font-semibold shadow-lg transition"
            >
              Fale comigo pelo WhatsApp
            </a>
          </div>
        </div>

        <div class="flex justify-center md:justify-end">
          <div class="relative">
            <div class="absolute inset-0 -m-4 rounded-3xl bg-sky-200/60 blur-2xl"></div>
            <img
              src="public/img/perfil_sun.jpeg"
              alt="Psicóloga humanista"
              class="relative w-full max-w-md rounded-3xl shadow-2xl object-cover aspect-[4/5] border-4 border-white"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- SOBRE MIM -->
    <section id="sobre-mim" class="py-20 bg-white">
      <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-3xl font-bold mb-6 text-slate-900">Sobre mim</h2>
          <p class="text-slate-600 mb-4 leading-relaxed">
            Sou uma psicóloga com abordagem humanista, dedicada a oferecer um atendimento
            acolhedor, ético e sensível às histórias únicas de cada pessoa.
          </p>
          <p class="text-slate-600 mb-4 leading-relaxed">
            Acredito na potência do vínculo terapêutico, na escuta genuína e no respeito ao
            ritmo de cada processo de transformação.
          </p>
          <p class="text-slate-600 leading-relaxed">
            Meu trabalho é caminhar ao seu lado para que você possa se compreender melhor,
            fortalecer sua autonomia e construir uma vida com mais sentido.
          </p>

        </div>

        <div class="grid gap-4">
          <div class="rounded-2xl bg-sky-50 p-6 shadow-sm border border-sky-100">
            <p class="text-slate-600">
              Psicóloga clínica com ampla experiência no atendimento online, com Mestrado. Defendeu a dissertação
              "Educação e Cultura: Um estudo sobre o processo de (Des)Educação dos indivíduos"
            </p>
          </div>
          <div class="rounded-2xl bg-rose-50 p-6 shadow-sm border border-rose-100">
            <p class="text-slate-600">
              Professora universitária e Orientadora de estágio clínico. Supervisão e orientação de trabalhos
              acadêmicos e para profissionais iniciantes. Orientação de TCC e outros.
            </p>
          </div>
          <div class="rounded-2xl bg-sky-50 p-6 shadow-sm border border-sky-100">
            <p class="text-slate-600">
              Conciliadora e Mediadora de conflitos do TJSP. Pacificação social através do fim dos litigios,
              desenvolver a comunicação não violenta para estabelecer bons acordos em todas as áreas.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- PSICOLOGIA HUMANISTA -->
    <section id="psicologia-humanista" class="py-20 bg-gradient-to-b from-sky-50 to-rose-50">
      <div class="max-w-6xl mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-12">
          <h2 class="text-3xl font-bold mb-4 text-slate-900">Psicologia Humanista</h2>
          <p class="text-slate-600 leading-relaxed">
            A Psicologia Humanista valoriza a experiência subjetiva, a liberdade de escolha,
            a responsabilidade pessoal e a capacidade de crescimento inerente a cada ser humano.
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-white p-8 rounded-2xl shadow-sm border border-sky-100">
            <p class="text-slate-600">
              "Aceitar quem somos hoje é o primeiro passo para construir quem queremos ser amanhã."
            </p>
            <h3 class="font-semibold text-xl mb-4 text-sky-700">
              Carl Rogers
            </h3>
          </div>

          <div class="bg-white p-8 rounded-2xl shadow-sm border border-rose-100">
            <p class="text-slate-600">
              "Nada existe, a não ser o agora." "As pessoas mudam quando aceitam quem são."
            </p>
            <h3 class="font-semibold text-xl mb-4 text-rose-600">
              Fritz Perls
            </h3>
          </div>

          <div class="bg-white p-8 rounded-2xl shadow-sm border border-sky-100">
            <p class="text-slate-600">
              "Se a única ferramenta que você tem é um martelo, você tende a ver todo problema como um prego"
            </p>
            <h3 class="font-semibold text-xl mb-4 text-sky-700">
              Abraham Maslow
            </h3>
          </div>
        </div>
      </div>
    </section>

    <!-- MEU TRABALHO -->
    <section id="meu-trabalho" class="py-20 bg-white">
      <div class="max-w-6xl mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-12">
          <h2 class="text-3xl font-bold mb-4 text-slate-900">Meu trabalho</h2>
          <p class="text-slate-600">
            Atuo com foco em demandas emocionais e relacionais, sempre respeitando o tempo e a singularidade de cada pessoa.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="bg-sky-50 p-6 rounded-2xl shadow-sm border border-sky-100">
            <h3 class="font-semibold text-lg mb-2 text-sky-800">Ansiedade</h3>
            <p class="text-slate-600">Apoio para entender gatilhos, reduzir sofrimento e encontrar mais equilíbrio.</p>
          </div>

          <div class="bg-rose-50 p-6 rounded-2xl shadow-sm border border-rose-100">
            <h3 class="font-semibold text-lg mb-2 text-rose-800">Autoestima</h3>
            <p class="text-slate-600">Fortalecimento da autoimagem e reconexão com o próprio valor.</p>
          </div>

          <div class="bg-sky-50 p-6 rounded-2xl shadow-sm border border-sky-100">
            <h3 class="font-semibold text-lg mb-2 text-sky-800">Relacionamentos</h3>
            <p class="text-slate-600">Desenvolvimento de vínculos mais saudáveis, claros e afetivos.</p>
          </div>

          <div class="bg-rose-50 p-6 rounded-2xl shadow-sm border border-rose-100">
            <h3 class="font-semibold text-lg mb-2 text-rose-800">Autoconhecimento</h3>
            <p class="text-slate-600">Processo de escuta interna para viver de forma mais consciente e alinhada.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTATO -->
    <section id="contato" class="py-20 bg-gradient-to-r from-sky-200 via-sky-100 to-rose-200 text-slate-900">
      <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">Contato</h2>
        <p class="text-slate-700 mb-8 text-lg">
          Se você sente que é hora de olhar com mais cuidado para si, entre em contato.
          Será um prazer te acompanhar nesse processo.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
          <a
            :href="whatsappLink"
            target="_blank"
            class="bg-sky-500 text-white px-8 py-4 rounded-xl font-semibold shadow hover:bg-sky-600 transition"
          >
            Agendar consulta
          </a>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-sky-900 text-sky-100 py-8 text-center">
      <p>© 2026 Psicologia Humanista • Todos os direitos reservados</p>
    </footer>
  </div>
</template>