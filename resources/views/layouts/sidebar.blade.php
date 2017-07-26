<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar ">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar ">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel ">
            <div class="pull-left image">
                <img src="{{ asset("/assets/dist/img/avatar5.png") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                @if (!Auth::guest())
                <p>
                    {{ Auth::user()->name }} 
                </p>
                <!-- Status -->
                <a href="#">
                    <i class="fa fa-circle text-success"></i>
                    {{ Auth::user()->roles->first()->display_name }}
                </a>
                @endif
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">                   
           <li class="treeview tour-sidebar">
                <a href="{{ url('admin/cadastro-paciente') }}">                    
                    <span>Cadastrar Paciente</span>
                    <span class="pull-right-container">
                    </span>
                </a>        
            </li> 
           <li class="treeview tour-sidebar">
                <a href="{{ url('ficha-anamnese') }}">                    
                    <span>Ficha Anamnese</span>
                    <span class="pull-right-container">
                    </span>
                </a>        
            </li>                  <!-- /.sidebar-menu -->
        </ul>
    </section><!-- /.sidebar -->
</aside>