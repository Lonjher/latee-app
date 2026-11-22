<?php

namespace App\Http\Controllers;

use App\Models\Complex;
use App\Models\Santri;
use Illuminate\View\View;

class ProgramController extends Controller
{
    /**
     * Unified handler for rendering program pages with structured dynamic model data.
     */
    public function renderProgram(string $complex, string $program): View
    {
        $programData = $this->getProgramData($complex, $program);

        return view("programs.{$complex}.{$program}", compact('programData'));
    }

    // Latee Putra Action Methods
    public function lateePendidikan(): View { return $this->renderProgram('latee', 'pendidikan'); }
    public function lateePeribadatan(): View { return $this->renderProgram('latee', 'peribadatan'); }
    public function lateePeminatan(): View { return $this->renderProgram('latee', 'peminatan'); }
    public function lateePublikasi(): View { return $this->renderProgram('latee', 'publikasi'); }
    public function lateeKesehatan(): View { return $this->renderProgram('latee', 'kesehatan'); }
    public function lateeKetertiban(): View { return $this->renderProgram('latee', 'ketertiban'); }
    public function lateeInfrastruktur(): View { return $this->renderProgram('latee', 'infrastruktur'); }
    public function lateeUnit(): View { return $this->renderProgram('latee', 'unit'); }

    // Latee I Putri Action Methods
    public function lateeiPendidikan(): View { return $this->renderProgram('lateei', 'pendidikan'); }
    public function lateeiPeribadatan(): View { return $this->renderProgram('lateei', 'peribadatan'); }
    public function lateeiPeminatan(): View { return $this->renderProgram('lateei', 'peminatan'); }
    public function lateeiPublikasi(): View { return $this->renderProgram('lateei', 'publikasi'); }
    public function lateeiKesehatan(): View { return $this->renderProgram('lateei', 'kesehatan'); }
    public function lateeiKetertiban(): View { return $this->renderProgram('lateei', 'ketertiban'); }
    public function lateeiInfrastruktur(): View { return $this->renderProgram('lateei', 'infrastruktur'); }
    public function lateeiUnit(): View { return $this->renderProgram('lateei', 'unit'); }

    // Latee II Putri Action Methods
    public function lateeiiPendidikan(): View { return $this->renderProgram('lateeii', 'pendidikan'); }
    public function lateeiiPeribadatan(): View { return $this->renderProgram('lateeii', 'peribadatan'); }
    public function lateeiiPeminatan(): View { return $this->renderProgram('lateeii', 'peminatan'); }
    public function lateeiiPublikasi(): View { return $this->renderProgram('lateeii', 'publikasi'); }
    public function lateeiiKesehatan(): View { return $this->renderProgram('lateeii', 'kesehatan'); }
    public function lateeiiKetertiban(): View { return $this->renderProgram('lateeii', 'ketertiban'); }
    public function lateeiiInfrastruktur(): View { return $this->renderProgram('lateeii', 'infrastruktur'); }
    public function lateeiiTataBusana(): View { return $this->renderProgram('lateeii', 'tata-busana'); }
    public function lateeiiUnit(): View { return $this->renderProgram('lateeii', 'unit'); }

    /**
     * Provide structured model-driven data per complex and program.
     */
    protected function getProgramData(string $complex, string $program): array
    {
        $complexSearch = [
            'latee'   => '%Putra%',
            'lateei'  => '%Latee I%',
            'lateeii' => '%Latee II%',
        ];

        $defaultNames = [
            'latee'   => 'Latee Putra',
            'lateei'  => 'Latee I Putri',
            'lateeii' => 'Latee II Putri',
        ];

        $searchPattern = $complexSearch[$complex] ?? '%Latee%';
        $complexModel  = Complex::with(['priest', 'rooms'])
            ->withCount(['santris as active_santris_count' => fn($q) => $q->where('status', Santri::STATUS_ACTIVE)])
            ->where('complex_name', 'like', $searchPattern)
            ->first();

        $complexName = $complexModel?->complex_name ?? ($defaultNames[$complex] ?? 'Annuqayah Latee');
        $pengasuh    = $complexModel?->priest?->full_name;

        return [
            'complex'         => $complex,
            'complex_name'    => $complexName,
            'complex_model'   => $complexModel,
            'pengasuh'        => $pengasuh,
            'room_count'      => $complexModel?->rooms?->count() ?? 0,
            'santri_count'    => $complexModel?->active_santris_count ?? 0,
            'program'         => $program,
            'updated_at'      => now()->format('d M Y'),
        ];
    }
}
