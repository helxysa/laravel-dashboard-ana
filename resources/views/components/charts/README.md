# Componente de Gráficos - x-charts.simple

Este componente permite criar gráficos de forma simples e reutilizável usando Chart.js, com integração completa ao Livewire.

## Uso Básico

```blade
<x-charts.simple
    id="meu-grafico"
    type="bar"
    title="Título do Gráfico"
    :data="[
        'labels' => ['Jan', 'Fev', 'Mar'],
        'datasets' => [[
            'label' => 'Vendas',
            'data' => [10, 20, 30],
            'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
            'borderColor' => 'rgba(54, 162, 235, 1)',
            'borderWidth' => 1
        ]]
    ]"
/>
```

## Propriedades Disponíveis

| Propriedade | Tipo | Padrão | Descrição |
|-------------|------|--------|-----------|
| `id` | string | 'chart' | ID único do canvas |
| `type` | string | 'bar' | Tipo do gráfico (bar, pie, doughnut, line, etc.) |
| `data` | array | [] | Dados do gráfico no formato Chart.js |
| `title` | string | '' | Título exibido acima do gráfico |
| `showLegend` | boolean | true | Se deve mostrar a legenda |
| `legendPosition` | string | 'bottom' | Posição da legenda (top, bottom, left, right) |
| `height` | string | 'h-40 lg:h-48 xl:h-52' | Classes CSS para altura do container |

## Exemplos

### Gráfico de Barras
```blade
<x-charts.simple
    id="vendas-mensais"
    type="bar"
    title="Vendas Mensais"
    :data="[
        'labels' => ['Jan', 'Fev', 'Mar', 'Abr'],
        'datasets' => [[
            'label' => 'Vendas',
            'data' => [12, 19, 3, 5],
            'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
            'borderColor' => 'rgba(54, 162, 235, 1)',
            'borderWidth' => 1
        ]]
    ]"
/>
```

### Gráfico de Pizza
```blade
<x-charts.simple
    id="distribuicao"
    type="pie"
    title="Distribuição por Categoria"
    :data="[
        'labels' => ['Categoria A', 'Categoria B', 'Categoria C'],
        'datasets' => [[
            'label' => 'Quantidade',
            'data' => [300, 50, 100],
            'backgroundColor' => [
                'rgba(255, 99, 132, 0.8)',
                'rgba(54, 162, 235, 0.8)',
                'rgba(255, 205, 86, 0.8)'
            ],
            'borderColor' => [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 205, 86, 1)'
            ],
            'borderWidth' => 2
        ]]
    ]"
/>
```

### Gráfico de Linha
```blade
<x-charts.simple
    id="evolucao"
    type="line"
    title="Evolução ao Longo do Tempo"
    :data="[
        'labels' => ['Jan', 'Fev', 'Mar', 'Abr', 'Mai'],
        'datasets' => [[
            'label' => 'Evolução',
            'data' => [65, 59, 80, 81, 56],
            'borderColor' => 'rgba(75, 192, 192, 1)',
            'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
            'tension' => 0.1
        ]]
    ]"
/>
```

### Gráfico de Rosca (Doughnut)
```blade
<x-charts.simple
    id="situacao"
    type="doughnut"
    title="Situação dos Colaboradores"
    :data="[
        'labels' => ['Ativos', 'Inativos', 'Licença'],
        'datasets' => [[
            'label' => 'Situação',
            'data' => [45, 3, 2],
            'backgroundColor' => [
                'rgba(34, 197, 94, 0.8)',
                'rgba(239, 68, 68, 0.8)',
                'rgba(245, 158, 11, 0.8)'
            ],
            'borderColor' => '#fff',
            'borderWidth' => 2,
            'cutout' => '70%',
            'radius' => '90%'
        ]]
    ]"
/>
```

## Configurações Específicas por Tipo

O componente aplica automaticamente configurações específicas baseadas no tipo:

### Bar (Barras)
- Adiciona `beginAtZero: true` no eixo Y
- Configuração padrão de escalas

### Pie/Doughnut (Pizza/Rosca)
- Configura legenda com `boxWidth: 20` e `padding: 15`
- Remove escalas (não aplicáveis)
- Posiciona legenda na parte inferior

### Line (Linha)
- Configura tensão da linha (`tension: 0.4`)
- Define raio dos pontos (`radius: 3`, `hoverRadius: 5`)
- Posiciona legenda no topo com estilo de pontos
- Adiciona títulos nos eixos X e Y
- Configura `beginAtZero: true` no eixo Y

## Integração com Livewire

O componente é totalmente compatível com Livewire:

- ✅ Reinicializa automaticamente após atualizações da página
- ✅ Destrói gráficos antigos antes de criar novos
- ✅ Aguarda o Chart.js carregar antes de inicializar
- ✅ Suporta dados dinâmicos vindos do Livewire

### Exemplo com Dados do Livewire

```blade
<x-charts.simple
    id="membros-situacao"
    type="pie"
    title="Membros por Situação"
    :data="[
        'labels' => $ordersLabels,
        'datasets' => [[
            'label' => 'Membros por Situação',
            'data' => $ordersData,
            'backgroundColor' => [
                'rgba(16, 185, 129, 0.8)',
                'rgba(239, 68, 68, 0.8)'
            ],
            'borderColor' => '#fff',
            'borderWidth' => 2
        ]]
    ]"
/>
```

## Altura Personalizada

Você pode personalizar a altura do gráfico:

```blade
<x-charts.simple
    id="grafico-grande"
    type="line"
    title="Gráfico Grande"
    :data="$chartData"
    :height="'h-64 lg:h-80 xl:h-96'"
/>
```

## Dependências

- Chart.js (carregado via Vite)
- Tailwind CSS (para estilos)
- Livewire (para integração)

## Debug

O componente inclui logs de debug no console para facilitar a identificação de problemas:

- Logs de inicialização
- Logs de erro
- Verificação de dependências
- Status de carregamento 