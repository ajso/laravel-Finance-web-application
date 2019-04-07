<nav id="main-nav" role="navigation">

    <!-- Sample menu definition -->
    <ul id="main-menu" class="sm sm-blue">
        <li><a href="{{ url('home') }}">Home</a></li>

        <li><a href="javascript:void(0)">Authorization</a>
            <ul>
                <li><a href="userIndex">Add New User</a></li>
                <li><a href="userPrivilegeIndex">Set User Previlege</a></li>
                <li><a href="changePassword">Change User Password</a></li>
                {{--<li><a href="javascript:void(0)">Reset Default Password</a></li>--}}
            </ul>
        </li>

        <li><a href="javascript:void(0)">Basic</a>
            <ul>
                <li><a href="companyConfigIndex">Company Settings</a></li>
                <li><a href="projectIndex">Projects</a></li>
                <li><a href="fiscalPeriodIndex">Fiscal Period</a></li>
                <li><a href="accountGroupIndex">Account Groups</a></li>
                <li><a href="accountHeadIndex">Account Heads</a></li>
                <li><a href="openingBalanceIndex">Opening Balance</a></li>
                <li><a href="depreciationIndex">Fixed Asset Depreciation</a></li>
                <li><a href="anualBudgetIndex">Anual Budget To Expense</a></li>
                <li><a href="{!! url('yearclose/index') !!}">Year Close</a></li>
            </ul>
        </li>

        {{--<li><a href="javascript:void(0)">Download</a></li>--}}
        <li><a href="javascript:void(0)">Voucher</a>
            <ul>
                <li><a href="javascript:void(0)">Payments</a>
                    <ul>
                        <li><a href="cashPaymentIndex">Cash Payments</a></li>
                        <li><a href="bankPaymentIndex">Bank Payments</a></li>
                    </ul>
                </li>

                <li><a href="javascript:void(0)">Receives</a>
                    <ul>
                        <li><a href="cashReceiveIndex">Cash Receive</a></li>
                        <li><a href="bankReceiveIndex">Bank Receive</a></li>
                    </ul>
                </li>

                <li><a href="journalIndex">Journal Voucher</a></li>
                <li><a href="{!! route('transaction.edit.index') !!}">Edit Unposted Vouchers</a></li>
                <li><a href="{!! route('transaction.post.index') !!}">Check & Approve Vouchers</a></li>

            </ul>
        </li>

        {{--<li><a href="javascript:void(0)">Docs</a></li>--}}

        <li><a href="javascript:void(0)">Reports</a>
            <ul>
                <li><a href="{!! route('report.dailytrans.rpt') !!}">Daily Transaction List</a></li>
                <li><a href="{!! route('report.dailyvoucher.rpt') !!}">View Print Voucher</a></li>

                {{--<li><a href="javascript:void(0)">Unposted</a>--}}
                    {{--<ul>--}}
                        {{--<li><a href="{!! route('report.account.tb') !!}">Trial Ballance AC</a></li>--}}
                        {{--<li><a href="{!! route('report.group.tb') !!}">Trial Ballance Group</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                <li><a href="javascript:void(0)">Trial Balance</a>
                    <ul>
                        <li><a href="{!! route('posted.account.tb') !!}">Trial Ballance</a></li>
                        <li><a href="{!! route('posted.group.tb') !!}">Trial Ballance Group</a></li>
                    </ul>
                </li>
                <li><a href="{!! route('general.ledger.index') !!}">General Ledger</a></li>

                <li><a href="javascript:void(0)">Register</a>
                    <ul>
                        <li><a href="{!! route('cash.register.index') !!}">Cash Register</a></li>
                        <li><a href="{!! route('bank.register.index') !!}">Bank Register</a></li>
                    </ul>
                </li>
                {{--<li><a href="{!! route('cash.register.index') !!}">Cash Register</a></li>--}}
                {{--<li><a href="{!! route('bank.register.index') !!}">Bank Register</a></li>--}}

                <li><a href="test.view">test</a></li>
            </ul>
        </li>

        <li><a href="javascript:void(0)">Statements</a>
            <ul>
                <li><a href="{!! route('fn.statement.add') !!}">Add Statement</a></li>
                <li><a href="{!! route('fn.statement.create') !!}">Create Statement Data</a></li>
                <li><a href="{!! route('fn.statement.process') !!}">Process Statement Data</a></li>
                <li><a href="{!! route('fn.statement.print') !!}">Print Statement</a></li>
            </ul>
        </li>

@if(has_inventory()==true)
        <li><a href="{!! route('inventoryHome') !!} ">Inventory</a>
        </li>
@endif
        {{--<li><a href="javascript:void(0)">Mega menu</a>--}}
            {{--<ul class="mega-menu">--}}
                {{--<li>--}}
                    {{--<!-- The mega drop down contents -->--}}
                    {{--<div style="width:400px;max-width:100%;">--}}
                        {{--<div style="padding:5px 24px;">--}}
                            {{--<p>This is a mega drop down test. Just set the "mega-menu" class to the parent UL element to inform the SmartMenus script. It can contain <strong>any HTML</strong>.</p>--}}
                            {{--<p>Just style the contents as you like (you may need to reset some SmartMenus inherited styles - e.g. for lists, links, etc.)</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--end Mega Menu-->--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}


    </ul>
    <br/>
</nav>