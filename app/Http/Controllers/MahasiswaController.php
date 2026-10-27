namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Salwa Fadhilah Noviyana';
        $nim = '242520040'; 
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }
}