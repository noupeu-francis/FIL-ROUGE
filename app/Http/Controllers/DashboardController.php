public function index()
{
    $debits = Debit::where('user_id', Auth::id())->get();
    $total_mensuel = $debits->where('periodicite', 'Mensuel')->sum('montant');
    
    return view('dashboard', compact('debits', 'total_mensuel'));
}