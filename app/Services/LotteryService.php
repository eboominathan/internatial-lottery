<?php 
 

namespace App\Services;

use App\Models\LotteryDetail;
use Illuminate\Http\JsonResponse;

class LotteryService
{
	
	public function paginate($request): JsonResponse
    {
        try {
            $perPage = $request->rowsPerPage ?: 15;
            $page = $request->page ?: 1;
            $sortBy = $request->sortBy ?: 'created_at';
            $sortOrder = $request->descending == 'true' ? 'desc' : 'asc';

            $query = (new LotteryDetail())->newQuery()->orderBy($sortBy, $sortOrder);

            // $query->when($request->title, function ($query) use ($request) {
            //     $query->where('title', 'like', "%$request->title%");
            // });

            $results = $query->paginate($perPage, ['*'], 'page', $page);

            return response()->json($results, 200);
        } catch (\Exception$e) {
            return generalErrorResponse($e);
        }
    }

}

 ?> 