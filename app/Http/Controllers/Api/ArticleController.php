<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//請完成下方所有方法的實作，並撰寫對應的路由，用 Postman 來進行測試
class ArticleController extends Controller
{
    /**
     * 回傳該表格的所有資料，以 sort 欄位從小到大排序
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $articles = Article::get();
             $articles = Article::orderBy('sort','asc')->get();
            return $articles;

    }

    /**
     * 儲存前端傳入的資料，成功後回傳儲存的內容
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(),[
            'subject' => 'required | max:100',
            'content' => 'required',
            'enabled_at' => 'required',
            'sort' => 'required',
            'pic' => 'required',
            'enabled' => 'required',
            'cgy_id' => 'required'


            // $table->text('content');
            // $table->timestamp('enabled_at');
            // $table->integer('sort')->default(0);
            // $table->string('pic',255)->nullable();
            // $table->boolean('enabled')->default(true);
            // $table->bigInteger('cgy_id');
            // $table->timestamps();
         ]);

    }

    /**
     * 回傳指定的資料
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $article= Article::find($id);
           return $article;
    }

    /**
     * 更新指定的資料，成功後回傳更新後的內容
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 刪除指定的資料，成功後回傳 Success
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //查詢所有資料，只取 id , subject 以及 content 這三個欄位
    public function querySelect()
    {
            $articles = Article::get();
            $articles = Article::select(['id','suject','content'])->get();
            return $articles;
    }

    //查詢 enabled_at 於 2022/12/13 00:00:00 之後，enabled 為 true 的資料，按照 created_at 從新到舊排序，回傳第一筆資料的 subject 欄位內容
    public function querySpecific()
    {

    }

    //查詢 enabled_at 於 2022/12/10 00:00:00 之後，enabled 為 true 的資料，按照 created_at 從新到舊排序，回傳第2~4筆資料
    public function queryPagination()
    {

    }

    //查詢 enabled_at 介於 2022/12/10 00:00:00 和 2022/12/15 23:59:59 之間，sort 位於 $min 到 $max 之間的資料並回傳
    public function queryRange($min,$max)
    {

    }

    //根據所傳入的分類id，取出該分類所有 enabled 為 true 的資料，依照 sort 從小到大排序，回傳符合的資料
    public function queryByCgy($cgy_id)
    {

    }

    //試著使用 pluck() 來取得 id 為 key ， subject 為 value 的陣列
    public function queryPluck()
    {

    }

    //計算所有 enabled 為 true 的資料筆數後回傳，利用查詢方法 count()
    public function enabledCount()
    {

    }
}