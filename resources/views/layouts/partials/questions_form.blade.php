@if(Auth::user()->can('create tests'))
<div class="row">
  <div class="col-md-12">
    <div class="box">
      {{-- Header --}}
      <div class="box-header with-border">
        <h3 class="box-title">Questions' Control Panel</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-wrench"></i></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="form-horizontal" id="create_question">
          <div v-for="(question,key) in questions">
            <div class="form-group">
              <label for="body" class="col-sm-2 control-label">Body:</label>
              <div class="col-sm-10">
                <textarea name="body" type="text" id="body" class="form-control" v-model="questions[key].body"></textarea>
              </div>
            </div>
            <div class="form-group" v-for="(option, index) in questions[key].options">
              <label for="body" class="col-sm-2 control-label">Option:</label>
              <div class="col-sm-8">
                <input name="body" type="text" id="body" class="form-control" v-model="questions[key].options[index].body">
              </div>
              <div class="col-sm-2">
                <input type="checkbox" v-model="questions[key].options[index].is_answer">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <a class="btn btn-primary" @click="addOption(key)"><i class="fa fa-plus"></i> Add Option</a>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <a class="btn btn-success" @click="addQuestion"><i class="fa fa-plus"></i> Add Question</a>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <a class="btn btn-danger" @click='submit'>Submit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endif
@section('js')
<script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
<script type="text/javascript">
  var create_question = new Vue({
    el:'#create_question',
    data: {
      questions: [
        {
          body: "",
          test_id: {{$test->id}},
          options: [
            {
              body: "",
              is_answer: false
            }
          ]
        },
      ],
    },
    methods: {
      addOption: function (key) {
        var scaff = {
          body: "",
          is_answer: false
        };
        this.questions[key].options.push(scaff);
      },
      addQuestion: function () {
        var scaff = {
          body: "",
          error: null,
          test_id: {{$test->id}},
          options: [
            {
              body: "",
              is_answer: false
            }
          ]
        };
        this.questions.push(scaff);
      },
      clearData: function () {
        this.questions = [{
          body: "",
          test_id: {{$test->id}},
          options: [
            {
              body: "",
              is_answer: false
            }
          ]
        },];
      },
      submit: function () {
        // Encapsulate data
        data = {questions: this.questions};
        let $this = this;
        
        // Send data
        axios.post('/questions', data).then( function (response) {
          $this.clearData();
        }).catch(function (error) {
          $this.error = error;
        });
      }
    }
  });
</script>
@endsection